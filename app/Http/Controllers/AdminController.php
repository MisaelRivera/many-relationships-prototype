<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index ()
    {
        $roles = Role::paginate();
        return Inertia::render('admin/Index', [
            'roles' => $roles
        ]);
    }

    public function rolesShow ($roleId)
    {
        $role = Role::find($roleId);
        return Inertia::render('admin/roles/Show', [
            'role' => $role
        ]);
    }

    public function rolesEdit ($roleId)
    {
        $role = Role::find($roleId);
        return Inertia::render('admin/roles/Edit', [
            'role' => $role
        ]);
    }
}
