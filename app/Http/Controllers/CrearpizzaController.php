<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class CrearpizzaController extends Controller
{
    public function index(): Response
    {
        return response()->view('crearpizza.index', [
            'ingredientes' => Ingrediente::orderBy('id', 'desc')->get(),
        ]);
    }

    public function destroy(string $id): RedirectResponse
    {
        $ingrediente = Ingrediente::findOrFail($id);

        $delete = $ingrediente->delete($id);

        if($delete) {
            session()->flash('notif.success', 'El ingrediente se ha borrado con éxito.');
            return redirect()->route('crearpizza');
        }

        return abort(500);
    }

    public function crear(): Response
    {
        return response()->view('crearpizza.crear');
    }

    public function aniadir(Request $req) {
        $ingrediente = new Ingrediente;
        $ingrediente->name = $req->name;
        $ingrediente->price = $req->price;
        $ingrediente->image = '';
        $ingrediente->type = $req->type;
        $ingrediente->alergenos = '';
        $ingrediente->habilitado = true;

        $ingrediente->save();

        session()->flash('notif.success', 'Se ha añadido el ingrediente con éxito.');
        return redirect()->route('crearpizza');
    }

    public function editar(string $ingrediente): Response
    {
        return response()->view('crearpizza.editar', [
            'ingrediente' => Ingrediente::findOrFail($ingrediente),
        ]);
    }

    public function actualizar(Request $req, string $id) {
        $ingrediente = Ingrediente::findOrFail($id);

        $ingrediente->name = $req->name;
        $ingrediente->price = $req->price;
        $ingrediente->type = $req->type;

        $ingrediente->update();

        session()->flash('notif.success', 'Se ha actualizado el ingrediente con éxito.');
        return redirect()->route('crearpizza');
    }

    public function habilitar(string $id) {
        $ingrediente = Ingrediente::findOrFail($id);

        $ingrediente->habilitado = true;

        $ingrediente->update();

        session()->flash('notif.success', 'Se ha habilitado el ingrediente con éxito.');
        return redirect()->route('crearpizza');
    }

    public function deshabilitar(string $id) {
        $ingrediente = Ingrediente::findOrFail($id);

        $ingrediente->habilitado = false;

        $ingrediente->update();

        session()->flash('notif.success', 'Se ha deshabilitado el ingrediente con éxito.');
        return redirect()->route('crearpizza');
    }
}
