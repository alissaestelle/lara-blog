<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
// use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function create()
    {
        return view('auth.register');
    }

    function store(RegisterRequest $request): RedirectResponse
    {

        $attributes = $request->input();
        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been successfully created.');

        // Examine Request
        // ↳ return(request()->all());
    }
}
