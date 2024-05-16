<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function create()
    {
        return view('registration.create');
    }

    function store(RegisterRequest $request): RedirectResponse
    {

        $attributes = $request->input();

        User::create($attributes);
        session()->flash('success', 'Your account has been successfully created.');
        
        return redirect('/');

        // Examine Request
        // ↳ return(request()->all());
    }
}
