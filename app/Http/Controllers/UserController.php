<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user = new User();
        $user->surname = $request->input('surname');
        $user->name = $request->input('name');
        $user->patronymic = $request->input('patronymic');
        $user->login = $request->input('login');
        $user->phone_number = $request->input('phone_number');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        return var_dump($user);
    }
}
