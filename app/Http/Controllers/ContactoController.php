<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Reunion;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index() {
        $now = Carbon::now()->format('Y-m-d');
        return view('contacto')->with('now', $now);
    }
    public function store(Request $request) {
/*         dd($request->get('name'),
           $request->get('lastname'),
           $request->get('email'),
           $request->get('phone'),
           $request->get('date')
        ); */

        
           $this->validate($request,[
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:clients',
            'phone' => 'required' ,
            'date' => 'required'
           ]);


           Client::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,

           ]);

           $user_id = Client::Where('name', $request->name)->get();

           foreach($user_id as $id){
               Reunion::create([
                'date' => $request->date,
                'estado' => false,
                'client_id' => $id->id
               ]);
           }



           return redirect()->route('inicio');
    }
}
