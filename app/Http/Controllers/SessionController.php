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
            ->with('theme', 'text-[#BC9BBC] bg-transparent border border-[#B497B4]');
    }
}
