<?php

namespace App\Http\Controllers;

use App\locataires;
use App\locations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BailController extends Controller
{
    public function show_bail(){
        $locations=locations::all();
        if(Auth::check()) {
        $locataires=locataires::all()->where('user_id', Auth::user()->id);
        return view('bail',compact('locataires','locations'));
    }
}
  
}
