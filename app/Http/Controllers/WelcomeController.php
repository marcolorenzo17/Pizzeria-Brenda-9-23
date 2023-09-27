<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function __invoke() {
        $products = DB::select('select * from products order by id desc');
        return view('welcome', ['products' => $products]);
    }
}
