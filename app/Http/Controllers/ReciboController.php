<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReciboController extends Controller
{
    public function __invoke() {
        $recibos = DB::select('select * from recibos');
        return view('recibos', ['recibos' => $recibos]);
    }
}
