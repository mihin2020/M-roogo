<?php

namespace App\Http\Controllers;

use App\Ajout_bien;
use Illuminate\Http\Request;

class TestController extends Controller
{
  public function test(Request $request){
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
       
        
           
    ]);
    
        // Store the record, using the new file hashname which will be it's new filename identity.
            $product = new Ajout_bien();
            $product->type_biens = $request->input('types_biens');  
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
           
            $product->save(); // Finally, save the record.
            
    return 'okok';
 
    
  }
}
