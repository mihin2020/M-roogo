<?php

namespace App\Http\Controllers;

use App\locataires;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocatairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        if(Auth::check()) {
            $locataires = locataires::all()->where('user_id','=', Auth::user()->id);
            return view('mes_locataires',compact('locataires'));
         ;
        
    }
    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            'nom'=>'required|string|',
            'prenom'=>'required |string|',
            'email'=>'email',
            'numero'=>'integer',
            'date'=>'required|date|', 
            'lieu'=>'required|string|', 
            'nationalite'=>'required|string|', 
            'numero_cnib'=>'required|string|',   
        ]);
        locataires::create([
            'user_id'=>auth()->user()->id,
            'nom'=>request('nom'),
            'prenom'=>request('prenom'),
            'email'=>request('email'),
            'numero'=>request('numero'),
            'date'=>request('date'),
            'lieu'=>request('lieu'),
            'nationalite'=>request('nationalite'),
            'numero_cnib'=>request('numero_cnib'),
           
        ]);
        return redirect()->intended('mes_locataires')->with('success', 'nouveau locataire  ajouté avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
