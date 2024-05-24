<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    function create()
    {
        return view('auth.login');
    }

    function store(LoginRequest $request)//: RedirectResponse
    {
        $attributes = $request->validated();
        auth()->attempt($attributes);
        session()->regenerate();

        return redirect('/')->with('success', 'You have successfully logged in.')->with('theme', 'text-[#B779AC] bg-[#F6EEF5]/25 border border-[#B779AC]');
    }

    function destroy()
    {
        auth()->logout();

        return redirect('/')
            ->with('success', 'You have successfully logged out.')
            ->with('theme', 'text-[#B779AC] bg-[#F6EEF5]/25 border border-[#B779AC]');
    }
}
