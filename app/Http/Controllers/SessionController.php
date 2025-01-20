<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        request()->validate([
            'email' => ['required', 'min:3', 'email'],
            'password' => ['required', 'min:8']
        ]);


    }
}
