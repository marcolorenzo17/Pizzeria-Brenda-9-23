<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagardomicilioController extends Controller
{
    public function __invoke() {
        $cartItems = \Cart::getContent();
        $user = auth()->user();
        return view('pagardomicilio', compact('cartItems'), [
            'intent' => $user->createSetupIntent(),
        ]);
    }
}
