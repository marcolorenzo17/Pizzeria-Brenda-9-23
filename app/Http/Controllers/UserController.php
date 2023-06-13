<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
}
