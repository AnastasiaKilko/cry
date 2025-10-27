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
            $validated = $request->validate([
                'surname' => 'required|max:20',
                'name' => 'required|max:20',
                'patronymic' => 'required|max:20',
                'login' => 'required|unique:users|max:15',
                'phone_number' => 'required|max:11',
                'email' => 'required',
                'password' => 'required|min:8',
            ]);

        $user = new User();
        $user->surname = $validated['surname'];
        $user->name = $validated['name'];
        $user->patronymic = $validated['patronymic'];
        $user->login = $validated['login'];
        $user->phone_number = $validated['phone_number'];
        $user->email = $validated['email'];
        $user->password =  $validated['password'];

        $confirm_password = $request->input('confirm_password');

        if ($user->password == $confirm_password) {
            $user->password = Hash::make($user->password);
            $user->save();

            Auth::login($user);

            return redirect('/profile');
        }
        return redirect('/register');
    }

    public function profile()
    {
        return view('profile');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(credentials: $request->only('login', 'password'))) {
            return redirect('/profile');
        }

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
