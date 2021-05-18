<?php

namespace App\Http\Controllers;

use App\Ressource;
use Illuminate\Http\Request;

class Parametre_ressourceController extends Controller
{
    public function store_ressource(Request $request)
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
             return view('/dash');
    }

   
}
