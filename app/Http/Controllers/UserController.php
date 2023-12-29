<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __invoke() {
        $clientes = DB::select('select * from users order by id');
        return view('clientes', ['clientes' => $clientes]);
    }

    public function destroy(string $id): RedirectResponse
    {
        if (Auth::user()->id == $id) {
            session()->flash('notif.success', 'Un usuario no puede eliminarse a sí mismo.');
            return redirect()->route('clientes.index');
        } else {
            $cliente = User::findOrFail($id);

            $delete = $cliente->delete($id);

            if($delete) {
                session()->flash('notif.success', 'El usuario se ha eliminado con éxito.');
                return redirect()->route('clientes.index');
            }

            return abort(500);
        }
    }

    public function adminsi(string $id) {
        $cliente = User::findOrFail($id);

        $cliente->admin = true;

        $cliente->update();

        session()->flash('notif.success', 'El usuario seleccionado es ahora un administrador.');
        return redirect()->route('clientes.index');
    }

    public function adminno(string $id) {
        if (Auth::user()->id == $id) {
            session()->flash('notif.success', 'Un administrador no puede deshabilitarse a sí mismo.');
            return redirect()->route('clientes.index');
        } else {
            $cliente = User::findOrFail($id);

            $cliente->admin = false;
            $cliente->role = 'Cliente';

            $cliente->update();

            session()->flash('notif.success', 'El usuario seleccionado ya no es un administrador.');
            return redirect()->route('clientes.index');
        }
    }

    public function validar(string $id) {
        $cliente = User::findOrFail($id);

        $cliente->validado = true;

        $cliente->update();

        session()->flash('notif.success', 'Se ha validado al usuario con éxito.');
        return redirect()->route('clientes.index');
    }

    public function desvalidar(string $id) {
        if (Auth::user()->id == $id) {
            session()->flash('notif.success', 'Un usuario no puede invalidarse a sí mismo.');
            return redirect()->route('clientes.index');
        } else {
            $cliente = User::findOrFail($id);

            $cliente->validado = false;

            $cliente->update();

            session()->flash('notif.success', 'Se ha invalidado al usuario con éxito.');
            return redirect()->route('clientes.index');
        }
    }

    public function validacion(Request $req) {
        $validator = Validator::make($req->all(), [
            'id_user' => 'required',
        ],
        [
            'id_user.required' => 'Introduce pls'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $cliente = User::findOrFail($req->id_user);

        if ($cliente->validado) {
            if (Auth::user()->id == $req->id_user) {
                return response()->json(['success' => 'Un usuario no puede invalidarse a sí mismo.']);
            } else {
                $cliente->validado = false;

                $cliente->update();

                return response()->json(['success' => 'Se ha invalidado al usuario con éxito.']);
            }
        } else {
            $cliente->validado = true;

            return response()->json(['success' => 'Se ha validado al usuario con éxito.']);
        }
    }

    public function actualizarrol(Request $req, string $id) {
        $cliente = User::findOrFail($id);

        $cliente->role = $req->role;

        $cliente->update();

        session()->flash('notif.success', 'Se ha actualizado el rol con éxito.');
        return redirect()->route('clientes.index');
    }

    public function actualizarpuntos(Request $req, string $id) {
        $validate = Validator::make($req->all(), [
            'puntos' => 'numeric|min:0',
        ],[
            'puntos.numeric' => 'El campo de pizzacoins debe ser un número.',
            'puntos.min' => 'El campo de pizzacoins no puede ser menor de 0.'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }

        $cliente = User::findOrFail($id);

        if ($req->puntos == "") {
            $cliente->puntos = 0;
        } else {
            $cliente->puntos = $req->puntos;
        }

        $cliente->update();

        session()->flash('notif.success', 'Se han actualizado las Pizzacoins con éxito.');
        return redirect()->route('clientes.index');
    }
}
