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
        $clientes = User::orderBy('id', 'desc')->paginate(5);
        $roles = DB::select('select * from roles order by id desc');
        return view('clientes', ['clientes' => $clientes, 'roles' => $roles]);
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

        session()->flash('notif.success', 'El usuario seleccionado es ahora un administrador. Asegúrate de asignarle un rol.');
        return redirect()->route('clientes.index');
    }

    public function adminno(string $id) {
        if (Auth::user()->id == $id) {
            session()->flash('notif.success', 'Un administrador no puede deshabilitarse a sí mismo.');
            return redirect()->route('clientes.index');
        } else {
            $cliente = User::findOrFail($id);

            $cliente->admin = false;
            $cliente->id_role = null;

            if ($cliente->primero) {
                $cliente->primero = false;
            }

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
        if ($req->lang_es) {
            $validator = Validator::make($req->all(), [
                'id_user' => 'required',
            ],
            [
                'id_user.required' => 'Introduce un valor.'
            ]);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()]);
            }

            $cliente = User::findOrFail($req->id_user);

            if ($cliente->validado) {
                if (Auth::user()->id == $req->id_user) {
                    return response()->json(['error' => 'Un usuario no puede invalidarse a sí mismo.']);
                } else {
                    $cliente->validado = false;

                    $cliente->update();

                    return response()->json(['success' => 'Se ha invalidado al usuario con éxito.']);
                }
            } else {
                $cliente->validado = true;

                $cliente->update();

                return response()->json(['success' => 'Se ha validado al usuario con éxito.']);
            }
        } else {
            $validator = Validator::make($req->all(), [
                'id_user' => 'required',
            ],
            [
                'id_user.required' => 'Input a value.'
            ]);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()]);
            }

            $cliente = User::findOrFail($req->id_user);

            if ($cliente->validado) {
                if (Auth::user()->id == $req->id_user) {
                    return response()->json(['error' => 'A user cannot invalidate itself.']);
                } else {
                    $cliente->validado = false;

                    $cliente->update();

                    return response()->json(['success' => 'The user has been invalidated successfully.']);
                }
            } else {
                $cliente->validado = true;

                $cliente->update();

                return response()->json(['success' => 'The user has been validated successfully.']);
            }
        }
    }

    public function actualizarrol(Request $req, string $id) {
        if (Auth::user()->id == $id) {
            session()->flash('notif.success', 'Un usuario no puede cambiarse su propio rol.');
            return redirect()->route('clientes.index');
        } else {
            $cliente = User::findOrFail($id);

            $cliente->id_role = $req->role;

            if ($cliente->primero) {
                $cliente->primero = false;
            }

            $cliente->update();

            session()->flash('notif.success', 'Se ha actualizado el rol con éxito.');
            return redirect()->route('clientes.index');
        }
    }

    public function actualizarpuntos(Request $req, string $id) {
        /*
        $validate = Validator::make($req->all(), [
            'puntos' => 'numeric|min:0',
        ],[
            'puntos.numeric' => 'El campo de pizzacoins debe ser un número.',
            'puntos.min' => 'El campo de pizzacoins no puede ser menor de 0.'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }
        */

        $cliente = User::findOrFail($id);

        if (intval($req->puntos) < 0) {
            $cliente->puntos = 0;
        } else {
            $cliente->puntos = intval($req->puntos);
        }

        $cliente->update();

        session()->flash('notif.success', 'Se han actualizado las Pizzacoins con éxito.');
        return redirect()->route('clientes.index');
    }
}
