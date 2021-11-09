<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['guest']);
    // }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid login details');
        };
        //redirecte home pagina als het klant is

        if(auth()->user()->rol === "klant")
        {
            return redirect()->route('home');
        } else if(auth()->user()->rol === "medewerker" or "admin")
        {
            return redirect()->route('dashboard');
        } 
    }
}
