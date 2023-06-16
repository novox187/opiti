<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        /* Validation */
        $this->validate($request, [
            'user' => 'required|max:30|min:5|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'user' => $request->user,
            'password' => Hash::make($request->password),
            'credential'=> 'cliente'
        ]);

        auth()->attempt($request->only('user','password'));

        return redirect()->route('admin');
    }
}
