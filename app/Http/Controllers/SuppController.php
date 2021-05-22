<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuppController extends Controller
{
   public function destroy($id){
    DB::delete('delete from ajout_biens where id =?' , [$id]);
    return redirect('/dashboard')->with('success', 'Votre bien a été retirer avec succes');;
   }


}
