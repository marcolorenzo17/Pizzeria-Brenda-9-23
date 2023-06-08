<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recibo;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'El producto se ha añadido al carrito con éxito.');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'El carrito se ha actualizado con éxito.');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'El plato se ha eliminado con éxito.');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'El carrito se ha vaciado con éxito.');

        return redirect()->route('cart.list');
    }

    public function addData(Request $req) {
        $recibo = new Recibo;
        $recibo->total = $req->total;
        $recibo->direccion = $req->direccion;
        $recibo->telefono = $req->telefono;
        $recibo->idUser = Auth::user()->id;
        $recibo->estado = 'Pedido realizado';

        $recibo->save();

        \Cart::clear();

        session()->flash('notif.success', 'Se ha realizado el pedido con éxito.');
        return redirect('products');
    }
}
