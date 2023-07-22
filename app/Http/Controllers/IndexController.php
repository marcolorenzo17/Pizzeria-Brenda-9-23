<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        $platos = DB::select('select * from platos');
        return view('index', ['platos' => $platos]);
    }

    public function create() {
        return "Crear";
    }

    public function show($plato) {
        return "Show $plato";
    }
}
