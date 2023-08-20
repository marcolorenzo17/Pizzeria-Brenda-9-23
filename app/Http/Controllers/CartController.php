<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recibo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    private $restapuntos = 0;

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

        $user = User::findOrFail(Auth::user()->id);
        $user->puntos -= $request->puntos;
        $this->restapuntos += $request->puntos;
        $user->update();

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

        $user = User::findOrFail(Auth::user()->id);
        $user->puntos -= $request->puntos;
        $this->restapuntos += $request->puntos;
        $user->update();

        session()->flash('success', 'El carrito se ha actualizado con éxito.');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);

        $user = User::findOrFail(Auth::user()->id);
        $user->puntos += $request->puntos;
        $this->restapuntos -= $request->puntos;
        $user->update();

        session()->flash('success', 'El plato se ha eliminado con éxito.');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        $user = User::findOrFail(Auth::user()->id);
        $user->puntos += $this->restapuntos;
        $this->restapuntos = 0;
        $user->update();

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
        $recibo->pagado = $req->pagado;

        $recibo->save();

        if ($req->pagado == "true") {
            $amount = $req->total;
            $amount = $amount * 100;
            $paymentMethod = $req->payment_method;

            $user = auth()->user();
            $user->createOrGetStripeCustomer();

            $paymentMethod = $user->addPaymentMethod($paymentMethod);

            $user->charge($amount, $paymentMethod->id);
        }

        $user = User::findOrFail(Auth::user()->id);
        $user->puntos += ($req->total * 100);

        $user->update();

        \Cart::clear();

        $this->restapuntos = 0;

        session()->flash('notif.success', 'Se ha realizado el pedido con éxito.');
        return redirect('products');
    }
}
