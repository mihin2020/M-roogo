<?php

namespace App\Http\Controllers;

use App\Ajout_bien;
use App\Bien;
use App\Ressource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ajout_bienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $products=Ajout_bien::all();
        $parametre_biens=Bien::all();
        $parametre_ressources=Ressource::all();
        return view('ajout_bien',compact('parametre_biens','parametre_ressources','ajout_biens'));
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

            'type_biens'=>'required|string|',
            'localisation'=>'required |string|',
            'nbre_piece'=>'required |string|',
            'toilette'=>'|integer|max:4',
            'courant'=>'required|string|',
            'assainissement'=>'required|string|',
            'plafond'=>'required|string|',
            'carreaux'=>'required|string|',
            'meuble'=>'required',
            'prix'=>'required|integer|',
            'description'=>'|max:255',
            'statut'=>'required', 
            'caution'=>'|integer|max:12', 
            'avance'=>'|integer|max:12', 
            'prestation'=>'|integer|max:12', 
            'picture'=>'|image|', 
                
        ]);
        $image = request('picture')->store('uploads','public');
               
        
                Ajout_bien::create([
                    'user_id'=>auth()->user()->id,
                    'type_biens'=>request('type_biens'),
                    'localisation'=>request('localisation'),
                    'nbre_piece'=>request('nbre_piece'),
                    'toilette'=>request('toilette'),
                    'garage'=>request('garage'),
                    'courant'=>request('courant'),
                    'assainissement'=>request('assainissement'),
                    'plafond'=>request('plafond'),
                    'carreaux'=>request('carreaux'),
                    'meuble'=>request('meuble'),
                    'prix'=>request('prix'),
                    'description'=>request('description'),
                    'statut'=>request('statut'),
                    'caution'=>request('caution'),
                    'avance'=>request('avance'),
                    'prestation'=>request('prestation'),
                    'avance'=>request('avance'),
                    'picture'=>$image,
            
                ]);
                return redirect()->intended('ajout_bien')->with('success', 'Votre bien a été ajouté avec succes');
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
    {   $parametre_biens=Bien::all();
        $parametre_ressources=Ressource::all();
        $products = Ajout_bien::find($id);
        return view('biens.edit',compact('products','parametre_biens','parametre_ressources'));
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
        
        $products=$request->validate([

            'type_biens'=>'required|string|',
            'localisation'=>'required |string|',
            'nbre_piece'=>'required |string|',
            'toilette'=>'|integer|max:4',
            'courant'=>'required|string|',
            'assainissement'=>'required|string|',
            'plafond'=>'required|string|',
            'carreaux'=>'required|string|',
            'meuble'=>'required',
            'prix'=>'required|integer|',
            'description'=>'|max:255',
            'statut'=>'required', 
            'caution'=>'|integer|max:12', 
            'avance'=>'|integer|max:12', 
            'prestation'=>'|integer|max:12', 
            'picture'=>'|image|', 
                
        ]);
    //    $image = request('picture')->store('uploads','public');
               
        $products= Ajout_bien::find($id);
            
        $products->user_id =  $request->get('user_id');
        $products->type_biens =  $request->get('type_biens');
        $products->localisation =  $request->get('localisation');
        $products->nbre_piece =  $request->get('nbre_piece');
        $products->garage =  $request->get('garage');
        $products->courant =  $request->get('courant');
        $products->assainissement =  $request->get('assainissement');
        $products->plafond =  $request->get('plafond');
        $products->carreaux =  $request->get('carreaux');
        $products->meuble =  $request->get('meuble');
        $products->prix =  $request->get('prix');
        $products->description =  $request->get('description');
        $products->statut=  $request->get('statut');
        $products->caution =  $request->get('caution');
        $products->avance =  $request->get('avance');
        // $products->picture =  $request->get('picture');
        // $products->picture =  $image;
        $products->save();
        ;
         return redirect()->intended('/dashboard')->with('success', 'Votre bien a été ajouté avec succes');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Ajout_bien::find($id);
        $products->delete(); 
        return redirect('/dashboard')->with('success', 'Votre bien à été retiré avec succes');
        
    



    }
}
