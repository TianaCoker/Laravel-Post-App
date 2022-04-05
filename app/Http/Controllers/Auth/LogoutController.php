<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store()
    {
        
        // logs user out
        auth()->logout(); 

        //redirects to homepage
        return redirect()->route('home'); 

    }
}
