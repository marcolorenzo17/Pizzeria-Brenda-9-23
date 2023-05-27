<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EventoController extends Controller
{
    public function index(): Response
    {
        return response()->view('eventos.index');
    }
}
