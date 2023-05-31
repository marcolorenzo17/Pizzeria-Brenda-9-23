<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CrearpizzaController extends Controller
{
    public function __invoke() {
        $ingredientes = DB::select('select * from ingredientes');
        return view('crearpizza', ['ingredientes' => $ingredientes]);
    }
}
