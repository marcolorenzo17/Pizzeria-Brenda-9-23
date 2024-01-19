<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function __invoke() {
        $roles = Role::orderBy('id', 'desc')->paginate(5);
        return view('roles.index', ['roles' => $roles]);
    }

    public function crear(): Response
    {
        return response()->view('roles.crear');
    }

    public function editar(string $role): Response
    {
        return response()->view('roles.editar', [
            'role' => Role::findOrFail($role),
        ]);
    }

    public function destroy(string $id): RedirectResponse
    {
        $role = Role::findOrFail($id);

        $delete = $role->delete($id);

        if($delete) {
            session()->flash('notif.success', 'El rol se ha borrado con éxito.');
            return redirect()->route('roles.index');
        }

        return abort(500);
    }

    /*
    public function aniadir(Request $req) {
        $validate = Validator::make($req->all(), [
            'name' => 'required|max:255',
            'nameen' => 'required|max:255',
        ],[
            'name.required' => 'El campo es obligatorio.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',
            'nameen.required' => 'El campo es obligatorio.',
            'nameen.max' => 'El nombre no puede tener más de 255 caracteres.'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }

        $alergenos = '';
        if ($req->input('alergenos') != null) {
            foreach (array_values($req->input('alergenos')) as $alergeno) {
                $alergenos .= $alergeno . '-';
            }
            $alergenos = rtrim($alergenos, '-');
        }

        $product = new Role;
        $product->name = $req->name;
        $product->nameen = $req->nameen;
        $product->price = $req->price;
        $product->description = $req->description;
        $product->image = $image_path->getSecurePath();
        $product->type = $req->type;
        $product->alergenos = $alergenos;
        $product->habilitado = true;
        if ($req->puntos == "") {
            $product->puntos = 0;
        } else {
            $product->puntos = $req->puntos;
        }

        $product->save();

        session()->flash('notif.success', 'Se ha añadido el plato con éxito.');
        return redirect()->route('products.index');
    }
    */
}
