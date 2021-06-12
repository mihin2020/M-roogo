<?php

namespace App\Http\Controllers;

use App\Ajout_bien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Bien_updateController extends Controller
{
   public function Vue(){
     $products=Ajout_bien::all()->where('user_id', Auth::user()->id);
    return view('Update_bien',compact('products'));
   }
}
