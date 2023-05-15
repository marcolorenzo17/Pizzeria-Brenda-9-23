<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrearpizzaController extends Controller
{
    public function __invoke() {
        return view('crearpizza');
    }
}
