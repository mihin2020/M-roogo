<?php

namespace App\Http\Controllers;

use App\Ajout_bien;
use App\Bien;
use App\locataires;
use App\locations;
use App\Parametre;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Setting_bienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
       
    {   $biens = Ajout_bien::all()->count();
        $locations = locations::all()->count();
        $locataires = locataires::all()->count();
        $users = User::where('role_id','2')->count();
        return view('dashboard.index',compact('users','locataires','locations','biens'));
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
         request()->validate(
            [
                'role'=> ['required'],     
            ]);
    
            $parametres = new Parametre();
            $parametres->role =$request->input('role');
            $parametres->save();
            return redirect()->intended('setting_bien')->with('success', 'Parametrage effectué avec succés');
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
