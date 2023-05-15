<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /*
     public function productList()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }
    */

    public function index(string $tipo = 'Pizza'): Response
    {
        return response()->view('products.index', [
            'products' => Product::orderBy('updated_at', 'desc')->where('type', '=', $tipo)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view('products.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validated();

        // insert only requests that already validated in the StoreRequest
        $create = Product::create($validated);

        if($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'Se ha creado el plato con éxito.');
            return redirect()->route('products.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        return response()->view('products.show', [
            'products' => Product::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response()->view('products.form', [
            'products' => Product::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        $validated = $request->validated();

        $update = $product->update($validated);

        if($update) {
            session()->flash('notif.success', 'El plato se ha actualizado con éxito.');
            return redirect()->route('products.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);

        $delete = $product->delete($id);

        if($delete) {
            session()->flash('notif.success', 'El plato se ha eliminado con éxito.');
            return redirect()->route('products.index');
        }

        return abort(500);
    }
}
