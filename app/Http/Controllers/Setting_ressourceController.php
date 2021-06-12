<?php

namespace App\Http\Controllers;

use App\Ressource;
use Illuminate\Http\Request;

class Setting_ressourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        request()->validate(
            [
                'courant'=> ['required'],   
                'assainissement'=> ['required'], 
                'confort'=> ['required'], 
                'carreaux'=> ['required'], 
                'meuble'=> ['required'], 
                'statut'=> ['required'], 
                'garage'=> ['required'],
            ]);
    
            $parametre_ressources = new Ressource();
            $parametre_ressources->courant =$request->input('courant');
            $parametre_ressources->assainissement =$request->input('assainissement');
            $parametre_ressources->confort =$request->input('confort');
            $parametre_ressources->carreaux =$request->input('carreaux');
            $parametre_ressources->meuble =$request->input('meuble');
            $parametre_ressources->statut =$request->input('statut');
            $parametre_ressources->garage =$request->input('garage');
            $parametre_ressources->save();
            return redirect()->intended('setting_bien')->with('success', 'Parametrage effectué avec succés');
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
