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
            ->with('theme', 'text-[#B497B4] bg-transparent border border-[#B497B4]');
    }
}
