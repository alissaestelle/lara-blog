<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function destroy()
    {
        auth()->logout();

        return redirect('/register');
        // ->with('success', "You have successfully logged out.");
    }
}
