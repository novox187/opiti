<?php

namespace App\Http\Controllers;

use App\Models\Reunion;
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
        $busqueda = $request->buscador;
        if (!$busqueda) {
            $clients = Reunion::with('client')->oldest('estado')->orderByDesc('id')->get();
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

    public function update( Request $request)
    {
        if ($request->activo) {
            $id = $request->activo;
            $reunion = Reunion::find($id);
            $reunion->estado = false;
            $reunion->save();
        }elseif($request->estado){
            $id = $request->estado;
            $reunion = Reunion::find($id);
            $reunion->estado = true;
            $reunion->save();
        }


        return redirect(route('admin.show'));
    }

    
}
