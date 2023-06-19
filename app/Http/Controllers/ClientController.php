<?php

namespace App\Http\Controllers;

use App\Models\Reunion;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $clients = Reunion::with('client')->get();
        return view('software.admin.clientes',[
            'clients' => $clients,
        ]);
    }
}
