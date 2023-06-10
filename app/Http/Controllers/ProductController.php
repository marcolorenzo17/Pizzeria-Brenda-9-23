<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Valoracione;
use App\Models\Comentario;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

    public function index(): Response
    {
        return response()->view('products.index', [
            'products' => Product::orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    /*
    public function create(): Response
    {
        return response()->view('products.form');
    }
    */

    /**
     * Store a newly created resource in storage.
     */
    /*
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
    */

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        $valoraciones = DB::select('select * from valoraciones');
        $comentarios = DB::select('select * from comentarios');

        return response()->view('products.show', [
            'products' => Product::findOrFail($id),
            'valoraciones' => $valoraciones,
            'comentarios' => $comentarios,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    /*
    public function edit(string $id): Response
    {
        return response()->view('products.form', [
            'product' => Product::findOrFail($id),
        ]);
    }
    */

    /**
     * Update the specified resource in storage.
     */
    /*
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
    */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);

        $delete = $product->delete($id);

        if($delete) {
            session()->flash('notif.success', 'El plato se ha borrado con éxito.');
            return redirect()->route('products.index');
        }

        return abort(500);
    }

    public function crear(): Response
    {
        return response()->view('products.crear');
    }

    public function aniadir(Request $req) {
        $validate = Validator::make($req->all(), [
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
        ],[
            'name.required' => 'El campo es obligatorio.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',
            'price.required' => 'El campo es obligatorio.',
            'price.min' => 'El precio no puede ser menor de 0 €.',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }

        $product = new Product;
        $product->name = $req->name;
        $product->price = $req->price;
        $product->description = $req->description;
        $product->image = '';
        $product->type = $req->type;
        $product->alergenos = '';
        $product->habilitado = true;

        $product->save();

        session()->flash('notif.success', 'Se ha añadido el plato con éxito.');
        return redirect()->route('products.index');
    }

    public function editar(string $product): Response
    {
        return response()->view('products.editar', [
            'product' => Product::findOrFail($product),
        ]);
    }

    public function actualizar(Request $req, string $id) {
        $validate = Validator::make($req->all(), [
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
        ],[
            'name.required' => 'El campo es obligatorio.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',
            'price.required' => 'El campo es obligatorio.',
            'price.min' => 'El precio no puede ser menor de 0 €.',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }

        $product = Product::findOrFail($id);

        $product->name = $req->name;
        $product->price = $req->price;
        $product->description = $req->description;
        $product->type = $req->type;

        $product->update();

        session()->flash('notif.success', 'Se ha actualizado el plato con éxito.');
        return redirect()->route('products.index');
    }

    public function addValoracion(Request $req, string $id) {
        /*
        $req->validate([
            'resenia' => 'required',
        ]);
        */

        $validate = Validator::make($req->all(), [
            'resenia' => 'required',
        ],[
            'resenia.required' => 'El campo es obligatorio.',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }

        $product = Product::findOrFail($id);

        $valoracione = new Valoracione;
        $valoracione->resenia = $req->resenia;
        $valoracione->estrellas = $req->estrellas;
        $valoracione->idProduct = $product->id;
        $valoracione->idUser = Auth::user()->id;

        $valoracione->save();

        session()->flash('notif.success', 'Se ha añadido la valoración con éxito.');
        return redirect('/products/'.$product->id);
    }

    public function addComentario(Request $req, string $idProduct, string $idValoracion) {
        $validate = Validator::make($req->all(), [
            'reseniaCom' => 'required',
        ],[
            'reseniaCom.required' => 'El campo es obligatorio.',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }

        $product = Product::findOrFail($idProduct);
        $valoracion = Valoracione::findOrFail($idValoracion);

        $comentario = new Comentario;
        $comentario->resenia = $req->reseniaCom;
        $comentario->idValoracion = $valoracion->id;
        $comentario->idUser = Auth::user()->id;

        $comentario->save();

        session()->flash('notif.success', 'Se ha añadido el comentario con éxito.');
        return redirect('/products/'.$product->id);
    }

    public function habilitar(string $id) {
        $product = Product::findOrFail($id);

        $product->habilitado = true;

        $product->update();

        session()->flash('notif.success', 'Se ha habilitado el plato con éxito.');
        return redirect()->route('products.index');
    }

    public function deshabilitar(string $id) {
        $product = Product::findOrFail($id);

        $product->habilitado = false;

        $product->update();

        session()->flash('notif.success', 'Se ha deshabilitado el plato con éxito.');
        return redirect()->route('products.index');
    }
}
