<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagarController extends Controller
{
    public function __invoke() {
        $cartItems = \Cart::getContent();
        $user = auth()->user();
        return view('pagar', compact('cartItems'), [
            'intent' => $user->createSetupIntent(),
        ]);
    }
}
