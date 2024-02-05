<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function __invoke() {
        $roles = Role::orderBy('id', 'desc')->paginate(10);
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

        $privilegios = '';
        if ($req->input('privilegios') != null) {
            foreach (array_values($req->input('privilegios')) as $privilegio) {
                $privilegios .= $privilegio . '-';
            }
            $privilegios = rtrim($privilegios, '-');
        }

        $role = new Role;
        $role->nombre = $req->name;
        $role->nombreen = $req->nameen;
        $role->privilegios = $privilegios;
        $role->primero = false;

        $role->save();

        session()->flash('notif.success', 'Se ha añadido el rol con éxito.');
        return redirect()->route('roles.index');
    }

    public function actualizar(Request $req, string $id) {
        $validate = Validator::make($req->all(), [
            'name' => 'required|max:255',
            'nameen' => 'required|max:255',
        ],[
            'name.required' => 'El campo es obligatorio.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',
            'nameen.required' => 'El campo es obligatorio.',
            'nameen.max' => 'El nombre no puede tener más de 255 caracteres.',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }

        $role = Role::findOrFail($id);

        $privilegios = '';
        if ($req->input('privilegios') != null) {
            foreach (array_values($req->input('privilegios')) as $privilegio) {
                $privilegios .= $privilegio . '-';
            }
            $privilegios = rtrim($privilegios, '-');
        }

        $role->nombre = $req->name;
        $role->nombreen = $req->nameen;
        $role->privilegios = $privilegios;

        $role->update();

        session()->flash('notif.success', 'Se ha actualizado el rol con éxito.');
        return redirect()->route('roles.index');
    }

    public function show(string $id): Response
    {
        $users = DB::select('select * from users order by id desc');

        return response()->view('roles.show', [
            'role' => Role::findOrFail($id),
            'users' => $users
        ]);
    }
}
