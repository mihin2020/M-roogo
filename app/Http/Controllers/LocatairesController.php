<?php

namespace App\Http\Controllers;

use App\locataires;
use App\locations;
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
            $locataires = locataires::all()->where('user_id', Auth::user()->id);
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
        $locataires = locataires::find($id);
        return view('locataires.edit',compact('locataires'));
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
        $locataires=$request->validate([
            'user_id'=>'required',
            'nom'=>'required|string|',
            'prenom'=>'required |string|',
            'email'=>'email',
            'numero'=>'integer',
            'date'=>'required|date|', 
            'lieu'=>'required|string|', 
            'nationalite'=>'required|string|', 
            'numero_cnib'=>'required|string|',   
        ]);
        $locataires= locataires::find($id);
 
        $locataires->user_id =  $request->get('user_id');
        $locataires->nom =  $request->get('nom');
        $locataires->prenom =  $request->get('prenom');
        $locataires->email =  $request->get('email');
        $locataires->numero =  $request->get('numero');
        $locataires->date =  $request->get('date');
        $locataires->lieu =  $request->get('lieu');
        $locataires->nationalite=  $request->get('nationalite');
        $locataires->numero_cnib =  $request->get('numero_cnib');
        $locataires->save();

        
        return redirect()->intended('mes_locataires')->with('success', 'Modification effectuée avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $locataires = locataires::find($id);
        $locataires->delete(); 
        return redirect('/mes_locataires')->with('success', 'locataire retiré avec succès');
    }
}
