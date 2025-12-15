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
            'phone.min' => 'Поле ввода номера телефона должно содержать минимум 11 символов',
            'phone.max' => 'Поле ввода номера телефона должно содержать максимум 13 символов',
            'phone.regex' => 'Номер телефона должен быть в формате 79999999999',
            'password.min' => 'Поле должно содержать минимум 8 символов'
        ];

        $validated = $request->validate([
            'surname' => 'nullable|string|max:20',
            'name' => 'nullable|string|max:20',
            'patronymic' => 'nullable|string|max:20',
            'login' => 'nullable|unique:users|max:15',
            'phone_number' => 'nullable|string|max:13|min:11|regex:/^\[1-9][0-9]{11,13}$/',
            'email' => 'nullable|string|max:255',
            'password' => 'sometimes|nullable|string|min:8',
//            'confirm_password' => 'sometimes|nullable|string|min:8|same:password',
        ], $messages);

        if (isset($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

//        $confirm_password = $request->input('confirm_password');
//
//        if ($user->password == $confirm_password) {
//            $user->password = Hash::make($user->password);
//            $user->save();

        Auth::user()->update([
            'surname' => $validated['surname'],
            'name' => $validated['name'],
            'patronymic' => $validated['patronymic'],
            'phone_number' => $validated['phone_number'],
            'email' => $validated['email'],
        ]);

        Auth::user()->update($validated);

    }
}



