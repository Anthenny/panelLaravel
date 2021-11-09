<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['guest']);
    // }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'rol' => "klant",
            'password' => Hash::make($request->password)
        ]);

        auth()->attempt($request->only('email', 'password'));

        if(auth()->user()->rol === "klant")
        {
            return redirect()->route('home');
        } else if(auth()->user()->rol === "medewerker" or "admin")
        {
            return redirect()->route('dashboard');
        } 
    }
}
