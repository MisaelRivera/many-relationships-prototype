<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function rolesIndex ()
    {
        $roles = Role::paginate();
        return Inertia::render('admin/roles/Index', [
            'roles' => $roles
        ]);
    }
}
