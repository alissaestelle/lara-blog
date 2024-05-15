<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function create()
    {
        return view('registration.create');
    }

    function store()
    {
        request()->validate([
            'name' => 'required|max:125',
            'username' => 'required|min:7|max:125',
            'email' => 'required|email|max:125',
            'password' => 'required|min:7|max:20'
        ]);

        User::create();

        return view('registration.create');

        // Examine Request
        // ↳ return(request()->all());
    }
}
