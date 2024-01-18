<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;

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
}
