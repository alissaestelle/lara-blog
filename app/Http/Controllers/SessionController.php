<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function destroy()
    {
        auth()->logout();

        return redirect('/')
            ->with('success', 'You have successfully logged out.')
            ->with('theme', 'text-[#C59FC5] bg-transparent border border-[#C59FC5])');
    }
}
