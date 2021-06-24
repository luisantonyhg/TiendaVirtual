<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactanosController extends Controller
{
   
    public function index()
    {
        return view('contactanos');
    }

    
    public function contactanos(Request $request)
    
    { 

        // dd($request->all());
        if($request == true){
            $contactanos = DB::table('contactanos')->insert([
                'name' => $request->name,
                'apellido' => $request->apellido,
                'distrito' => $request->distrito,
                'email' => $request->email,
                'celular' => $request->celular,
            ]);
    
            return view('home');

        }else{
            return "regitro fallido";
        }
     
    }

    
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}