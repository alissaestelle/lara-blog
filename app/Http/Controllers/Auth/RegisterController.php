<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
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
        $attr = $request->input();
        $attr['url'] = $attr['name'];

        $user = User::create($attr);

        auth()->login($user);

        return redirect('/')
            ->with('success', 'Your account has been successfully created.')
            ->with('theme', 'text-green-600 bg-green-100/25 border border-green-600');

        // Examine Request
        // ↳ return(request()->all());
    }
}
