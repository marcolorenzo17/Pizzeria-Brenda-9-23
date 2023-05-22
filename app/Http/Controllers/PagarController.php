<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagarController extends Controller
{
    public function __invoke() {
        return view('pagar');
    }
}
