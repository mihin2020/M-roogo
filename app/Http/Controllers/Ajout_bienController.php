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
                // $product = new Ajout_bien();
                // $product->user_id = $request->input('user_id');
                // $product->type_biens = $request->input('type_biens');  
                // $product->localisation=$request->input('localisation');
                // $product->nbre_piece=$request->input('nbre_piece');
                // $product->toilette=$request->input('toilette');
                // $product->garage=$request->input('garage');
                // $product->courant=$request->input('courant');
                // $product->assainissement=$request->input('assainissement');
                // $product->plafond=$request->input('plafond');
                // $product->carreaux=$request->input('carreaux');
                // $product->meuble=$request->input('meuble');
                // $product->prix=$request->input('prix');
                // $product->description=$request->input('description');
                // $product->statut=$request->input('statut');
                // $product->caution=$request->input('caution');
                // $product->avance=$request->input('avance');
                // $product->prestation=$request->input('prestation');
                // $product->save(); // Finally, save the record.
                // return redirect()->intended('ajout_bien')->with('success', 'Votre bien a été ajouté avec succes');
        
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
                    'picture'=>request('picture'),
            
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
            $products = DB::table('ajout_biens')->get();
            return view('ajout_bien',[
                'products'=>$products
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit',compact('products'));
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
        // $product->delete();
        // return back('/dashboard')->with('success', 'Student deleted successfully');
        
    



    }
}
