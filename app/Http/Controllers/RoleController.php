<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function __invoke() {
        $roles = Role::orderBy('id', 'desc')->paginate(5);
        return view('rolesIndex', ['roles' => $roles]);
    }
}
