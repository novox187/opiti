<?php

namespace App\Http\Controllers;

use App\Models\reunion;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $clients = Reunion::with('client')->get();

        return view('software.admin.inicio',[
            'clients' => $clients,
        ]);

    }

    
}
