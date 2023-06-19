<?php

namespace App\Http\Controllers;

use App\Models\reunion;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index( Request $request)
    {
/*         $busqueda = $request->buscador;
        $clients = Reunion::with(['client' => function($q) use ($busqueda) {
            $q->where('name', $busqueda);
        }])->get(); */

        $busqueda = $request->buscador;
        if (!$busqueda) {
            $clients = Reunion::with('client')->get();
        }elseif($busqueda){
            $clients = Reunion::whereHas('client', function($q) use ($busqueda){
                $q->where('name', 'LIKE','%'. $busqueda.'%')
                ->orWhere('date', 'LIKE','%'. $busqueda.'%')
                ->orWhere('phone', 'LIKE','%'. $busqueda.'%')
                ->orWhere('email', 'LIKE','%'. $busqueda.'%');
            })->get();
        }


        return view('software.admin.inicio',[
            'clients' => $clients,
        ]);

    }

    
}
