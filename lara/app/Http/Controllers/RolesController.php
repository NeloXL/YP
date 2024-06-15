<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function create(Request $request)
    {
        Roles::create($request->all());

        return response()->json([
            'message'=> 'Роль успешно создана'
        ]);
    }

    public function get(Request $request)
    {
        $roles = Roles::select('id', 'role')->get();

        return response()->json([
            'roles'=>$roles
        ]);
    }
}
