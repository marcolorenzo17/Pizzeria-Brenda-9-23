<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class EventoController extends Controller
{

    public function index(): Response {
        $eventos = DB::select('select * from eventos');
        return response()->view('eventos.index', ['eventos' => $eventos]);
    }

    public function add(Request $req) {
        $req->validate([
            'personas' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
        ]);

        $evento = new Evento;
        $evento->idUser = Auth::user()->id;
        $evento->personas = $req->personas;
        $evento->tipo = $req->tipo;
        $evento->fecha = $req->fecha;
        $evento->hora = $req->hora;
        $evento->presupuesto = $req->presupuesto;

        $evento->save();

        session()->flash('notif.success', 'Se ha realizado la reserva con éxito.');
        return redirect('/products');
    }
}
