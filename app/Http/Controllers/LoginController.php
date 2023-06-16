<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'user' => 'required',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('user','password'))) {
            return back()->with('mensaje','credenciales incorrectas');
        }
        return redirect()->route('admin');
    }

    
}
