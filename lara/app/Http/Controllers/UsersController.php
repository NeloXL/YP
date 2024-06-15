<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser;
use App\Models\Users;
use Illuminate\Http\Request;
use function Laravel\Prompts\password;

class UsersController extends Controller
{
    public function create(Request $request)
    {
        Users::create($request->all());

        return response()->json([
            "message" => "Пользователь успешно создан"
        ], 201);
    }

    public function get(Request $request, $login, $password)
    {
        $user = Users::where('login', $login)->first();
        if ($user->password === $password){
            return response()->json([
                "message" => "Успешный вход!"
            ], 201);
        }
        else{

        }
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
