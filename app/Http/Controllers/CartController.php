<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recibo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Mail\ReciboEmail;
use Illuminate\Support\Facades\Mail;

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
        $user = User::findOrFail(Auth::user()->id);
        if ($request->type == "Promoción" and $user->promocion == true) {
            session()->flash('success', 'Sólo se puede añadir una promoción al mismo tiempo.');
            return redirect()->route('cart.list');
        } else {
            \Cart::add([
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->image,
                    'puntos' => $request->puntos,
                    'type' => $request->type,
                )
            ]);

            $user->puntos -= $request->puntos;
            $user->restapuntos += $request->puntos;
            $user->update();

            if ($request->type == "Promoción") {
                $user->promocion = true;
                $user->update();
            }

            session()->flash('success', 'El producto se ha añadido al carrito con éxito.');
            return redirect()->route('cart.list');
        }
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
        $user = User::findOrFail(Auth::user()->id);

        if ($request->type == "Promoción") {
            $user->promocion = false;
            $user->update();
        }

        \Cart::remove($request->id);

        $user->puntos += $request->puntos;
        $user->restapuntos -= $request->puntos;
        $user->update();


        session()->flash('success', 'El plato se ha eliminado con éxito.');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        $user = User::findOrFail(Auth::user()->id);
        $user->puntos += $user->restapuntos;
        $user->restapuntos = 0;
        $user->promocion = false;
        $user->update();

        session()->flash('success', 'El carrito se ha vaciado con éxito.');

        return redirect()->route('cart.list');
    }

    public function addData(Request $req) {
        $recibo = new Recibo;
        $recibo->puntos = $req->puntos;
        $recibo->total = $req->total;
        $recibo->direccion = $req->direccion;
        $recibo->telefono = $req->telefono;
        $recibo->idUser = Auth::user()->id;
        $recibo->estado = 'Pedido registrado';
        $recibo->pagado = $req->pagado;
        $recibo->productos = $req->productos;

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
        $user->restapuntos = 0;
        $user->promocion = false;

        $user->update();

        \Cart::clear();

        $name = "joel";
        Mail::to('watsapbru89@gmail.com')->send(new ReciboEmail($name));

        session()->flash('notif.success', 'Se ha realizado el pedido con éxito.');
        return redirect('products');
    }
}
