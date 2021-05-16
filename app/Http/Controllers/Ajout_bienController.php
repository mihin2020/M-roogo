<?php

namespace App\Http\Controllers;

use App\Ajout_bien;
use App\Bien;
use App\Ressource;
use Illuminate\Http\Request;

class Ajout_bienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parametre_biens=Bien::all();
        $parametre_ressources=Ressource::all();
        return view('ajout_bien',compact('parametre_biens','parametre_ressources'));
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

            'type_biens'=>'required',
            'localisation'=>'required',
            'nbre_piece'=>'required',
            'courant'=>'required',
            'assainissement'=>'required',
            'plafond'=>'required',
            'carreaux'=>'required',
            'meuble'=>'required',
            'prix'=>'required',
            'description'=>'required',
            'statut'=>'required', 
            // 'picture'=>'required',   
               
        ]);
                $product = new Ajout_bien();
                $product->type_biens = $request->input('type_biens');  
                $product->localisation=$request->input('localisation');
                $product->nbre_piece=$request->input('nbre_piece');
                $product->courant=$request->input('courant');
                $product->assainissement=$request->input('assainissement');
                $product->plafond=$request->input('plafond');
                $product->carreaux=$request->input('carreaux');
                $product->meuble=$request->input('meuble');
                $product->prix=$request->input('prix');
                $product->description=$request->input('description');
                $product->statut=$request->input('statut');
                // $product->picture=$request->input('picture');
                $product->save(); // Finally, save the record.
                return 'ok';
        
        
    
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
