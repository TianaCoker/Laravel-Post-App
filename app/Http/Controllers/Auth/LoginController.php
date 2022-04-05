<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct(){

        $this->middleware(['guest']);

 }

    public function index()
    {
        
        return view('auth.login');

    }

    public function store(Request $request) // we sign the user in
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //sign user in and flash an error message if it fails

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)){
           //for redirecting back to the page the user last visited
            return back()->with('status', 'Invalid login details');
        }
    
         return redirect()->route('dashboard');
    }


}
