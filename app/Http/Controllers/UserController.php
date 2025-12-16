<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('/profile', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $messages = [
            'phone_number.min' => 'Поле ввода номера телефона должно содержать минимум 11 символов',
            'phone_number.max' => 'Поле ввода номера телефона должно содержать максимум 13 символов',
            'phone_number.regex' => 'Номер телефона должен быть в формате 79999999999',
            'login.unique' => 'Логин уже занят'
        ];

        $validated = $request->validate([
            'surname' => 'nullable|string|max:20',
            'name' => 'nullable|string|max:20',
            'patronymic' => 'nullable|string|max:20',
            'login' => 'nullable|unique:users|max:15',
            'phone_number' => 'nullable|string|max:13|min:11|regex:/^\+?7?[\s\(]?\d{3}[\s\)]?\d{3}[-\s]?\d{2}[-\s]?\d{2}$/',
            'email' => 'nullable|string|max:255',
        ], $messages);

        Auth::user()->update($validated);

        return view('profile', ['user' => Auth::user()]);

    }
}



