<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $confirm_password;

    public function register(Request $request)
    {
        $user = new User();
        $user->surname = $request->input('surname');
        $user->name = $request->input('name');
        $user->patronymic = $request->input('patronymic');
        $user->login = $request->input('login');
        $user->phone_number = $request->input('phone_number');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $confirm_password = $request->input('confirm_password');

        if($user->password == $confirm_password){
            $user->password = Hash::make($user->password);
            $user->save();
            return redirect('/profile');
        }
        return redirect('/register');
    }

    public function login(Request $request)
    {
        $user = User::where('login', $request->input('login'))->first();

        Auth::login($user);

        return redirect('/profile');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
