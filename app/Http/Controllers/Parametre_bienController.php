<?php

namespace App\Http\Controllers;

use App\Bien;
use Illuminate\Http\Request;

class Parametre_bienController extends Controller
{
    public function store_bien(Request $request)
    {
        request()->validate(
            [
                'type_bien'=> ['required'],   
                'nbre_piece'=>['required']  
            ]);
    
            $parametre_biens = new Bien();
            $parametre_biens->type_bien =$request->input('type_bien');
            $parametre_biens->nbre_piece =$request->input('nbre_piece');
            $parametre_biens->save();
             return view('/dash');
    }
}
