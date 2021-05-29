<?php

namespace App\Http\Controllers;

use App\Ajout_bien;
use App\Bien;
use App\locataires;
use App\locations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $parametre_biens=Bien::all();
        $products=Ajout_bien::all()->where('user_id', '=', Auth::user()->id);
        $locations=locations::all();
        if(Auth::check()) {
        $locataires=locataires::all()->where('user_id', '=', Auth::user()->id);
        return view('mes_locations',compact('parametre_biens','locataires','products','locations')); 
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
            'user_id'=>'required',
            'type_bien'=>'required|string|',
            'locataire'=>'required |string|',
            'type_bail'=>'required|string',
            'loyer'=>'|required|', 
            'date_bail'=>'required|date|', 
            'date_entre'=>'required|date|', 
               
        ]);
        locations::create([
            'user_id'=>auth()->user()->id,
            'type_bien'=>request('type_bien'),
            'locataire'=>request('locataire'),
            'type_bail'=>request('type_bail'),
            'loyer'=>request('loyer'),
            'date_bail'=>request('date_bail'),
            'date_entre'=>request('date_entre'),
        ]);
        return redirect()->intended('mes_locations')->with('success', 'Location affectée avec succès');
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
