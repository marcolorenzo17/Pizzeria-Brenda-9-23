<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class CrearpizzaController extends Controller
{
    public function index(): Response
    {
        return response()->view('crearpizza.index', [
            'ingredientes' => Ingrediente::orderBy('id', 'desc')->get(),
        ]);
    }

    public function destroy(string $id): RedirectResponse
    {
        $ingrediente = Ingrediente::findOrFail($id);

        $delete = $ingrediente->delete($id);

        if($delete) {
            $foto = $ingrediente->image;
            $token = explode('/', $foto);
            $token2 = explode('.', $token[sizeof($token) - 1]);
            Cloudinary::destroy('image_ingredient/'.$token2[0]);

            session()->flash('notif.success', 'El ingrediente se ha borrado con éxito.');
            return redirect()->route('crearpizza');
        }

        return abort(500);
    }

    public function crear(): Response
    {
        return response()->view('crearpizza.crear');
    }

    public function aniadir(Request $req) {
        $validate = Validator::make($req->all(), [
            'name' => 'required|max:255',
            'nameen' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'image_ingredient' => 'required|mimes:jpg,png,jpeg,gif,svg,pdf',
        ],[
            'name.required' => 'El campo es obligatorio.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',
            'nameen.required' => 'El campo es obligatorio.',
            'nameen.max' => 'El nombre no puede tener más de 255 caracteres.',
            'price.required' => 'El campo es obligatorio.',
            'price.numeric' => 'El precio debe ser un número.',
            'price.min' => 'El precio no puede ser menor de 0 €.',
            'image_ingredient.required' => 'El campo es obligatorio.',
            'image_ingredient.mimes' => 'El archivo debe estar en formato: jpg, png, jpeg, gif o svg.'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }

        $image_path = $req->file('image_ingredient')->storeOnCloudinary('image_ingredient');

        $alergenos = '';
        if ($req->input('alergenos') != null) {
            foreach (array_values($req->input('alergenos')) as $alergeno) {
                $alergenos .= $alergeno . '-';
            }
            $alergenos = rtrim($alergenos, '-');
        }

        $ingrediente = new Ingrediente;
        $ingrediente->name = $req->name;
        $ingrediente->nameen = $req->nameen;
        $ingrediente->price = $req->price;
        $ingrediente->image = $image_path->getSecurePath();
        $ingrediente->type = $req->type;
        $ingrediente->alergenos = $alergenos;
        $ingrediente->habilitado = true;

        $ingrediente->save();

        session()->flash('notif.success', 'Se ha añadido el ingrediente con éxito.');
        return redirect()->route('crearpizza');
    }

    public function editar(string $ingrediente): Response
    {
        return response()->view('crearpizza.editar', [
            'ingrediente' => Ingrediente::findOrFail($ingrediente),
        ]);
    }

    public function actualizar(Request $req, string $id) {
        $validate = Validator::make($req->all(), [
            'name' => 'required|max:255',
            'nameen' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'image_ingredient' => 'mimes:jpg,png,jpeg,gif,svg,pdf',
        ],[
            'name.required' => 'El campo es obligatorio.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',
            'nameen.required' => 'El campo es obligatorio.',
            'nameen.max' => 'El nombre no puede tener más de 255 caracteres.',
            'price.required' => 'El campo es obligatorio.',
            'price.numeric' => 'El precio debe ser un número.',
            'price.min' => 'El precio no puede ser menor de 0 €.',
            'image_ingredient.mimes' => 'El archivo debe estar en formato: jpg, png, jpeg, gif o svg.'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }

        $ingrediente = Ingrediente::findOrFail($id);

        $alergenos = '';
        if ($req->input('alergenos') != null) {
            foreach (array_values($req->input('alergenos')) as $alergeno) {
                $alergenos .= $alergeno . '-';
            }
            $alergenos = rtrim($alergenos, '-');
        }

        $ingrediente->name = $req->name;
        $ingrediente->nameen = $req->nameen;
        $ingrediente->price = $req->price;
        $ingrediente->type = $req->type;

        $foto = $ingrediente->image;
        $token = explode('/', $foto);
        $token2 = explode('.', $token[sizeof($token) - 1]);
        Cloudinary::destroy('image_ingredient/'.$token2[0]);

        if ($req->file('image_ingredient') != null) {
            $image_path = $req->file('image_ingredient')->storeOnCloudinary('image_ingredient');
            $ingrediente->image = $image_path->getSecurePath();
        }

        $ingrediente->alergenos = $alergenos;

        $ingrediente->update();

        session()->flash('notif.success', 'Se ha actualizado el ingrediente con éxito.');
        return redirect()->route('crearpizza');
    }

    public function habilitar(string $id) {
        $ingrediente = Ingrediente::findOrFail($id);

        $ingrediente->habilitado = true;

        $ingrediente->update();

        session()->flash('notif.success', 'Se ha habilitado el ingrediente con éxito.');
        return redirect()->route('crearpizza');
    }

    public function deshabilitar(string $id) {
        $ingrediente = Ingrediente::findOrFail($id);

        $ingrediente->habilitado = false;

        $ingrediente->update();

        session()->flash('notif.success', 'Se ha deshabilitado el ingrediente con éxito.');
        return redirect()->route('crearpizza');
    }
}
