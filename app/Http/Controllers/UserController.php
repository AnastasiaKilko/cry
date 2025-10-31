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
        $messages = [
            'surname.required' => 'Поле "Фамилия" обязательно для заполнения.',
            'surname.max' => 'Фамилия не должна превышать 20 символов.',
            'name.required' => 'Поле "Имя" обязательно для заполнения.',
            'name.max' => 'Имя не должно превышать 20 символов.',
            'patronymic.required' => 'Поле "Отчество" обязательно для заполнения.',
            'patronymic.max' => 'Отчество не должно превышать 20 символов.',
            'login.required' => 'Поле "Логин" обязательно для заполнения.',
            'login.unique' => 'Такой логин уже существует.',
            'login.max' => 'Логин не должен превышать 15 символов.',
            'phone_number.required' => 'Поле "Телефон" обязательно для заполнения.',
            'phone_number.max' => 'Телефон не должен превышать 11 символов.',
            'email.required' => 'Поле "Email" обязательно для заполнения.',
            'password.required' => 'Поле "Пароль" обязательно для заполнения.',
            'password.min' => 'Пароль должен содержать минимум 8 символов.',
            'confirm_password.required' => 'Поле "Пароль" обязательно для заполнения.',
            'confirm_password.min' => 'Пароль должен содержать минимум 8 символов.',
            'confirm_password.same' => 'Пароли должны совпадать.',
        ];

        $validated = $request->validate([
            'surname' => 'required|max:20',
            'name' => 'required|max:20',
            'patronymic' => 'required|max:20',
            'login' => 'required|unique:users|max:15',
            'phone_number' => 'required|max:11',
            'email' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8|same:password',
        ], $messages);

        $user = new User();
        $user->surname = $validated['surname'];
        $user->name = $validated['name'];
        $user->patronymic = $validated['patronymic'];
        $user->login = $validated['login'];
        $user->phone_number = $validated['phone_number'];
        $user->email = $validated['email'];
        $user->password = $validated['password'];

        $confirm_password = $request->input('confirm_password');

        if ($user->password == $confirm_password) {
            $user->password = Hash::make($user->password);
            $user->save();

            Auth::login($user);

            return redirect('/');
        }
        return redirect('/register');
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('/profile', ['user' => $user]);
    }

    public function login(Request $request)
    {
        if (Auth::attempt(credentials: $request->only('login', 'password'))) {
            return redirect('/');
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
