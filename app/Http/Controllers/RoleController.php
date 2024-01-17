<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Role;

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
}
