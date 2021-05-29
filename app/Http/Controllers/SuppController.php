<?php

namespace App\Http\Controllers;

use App\Ajout_bien;
use App\locataires;
use App\locations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuppController extends Controller
{
   public function destroy($id){
      Ajout_bien::where('id', $id)->delete();
    return redirect('/dashboard')->with('success', 'Votre bien a été retirer avec succes');;
   }

   public function destroy_locataire($id){
      locataires::where('id', $id)->delete();
      return redirect('/mes_locataires')->with('success', 'le locataire a été retirer avec succes');;
     }
  
     public function destroy_location($id){
      locations::where('id', $id)->delete();
      return redirect('/mes_locations')->with('success', 'le locataire a été retirer avec succes');;
     }
}
