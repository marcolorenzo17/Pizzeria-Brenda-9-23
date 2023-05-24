<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagardomicilioController extends Controller
{
    public function __invoke() {
        $cartItems = \Cart::getContent();
        return view('pagardomicilio', compact('cartItems'));
    }
}
