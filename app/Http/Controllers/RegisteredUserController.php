<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'min:3', 'email'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required', 'same:password']
        ]);

        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password')
        ]);

        return redirect('/');
    }
}
