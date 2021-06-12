<?php

namespace App\Http\Controllers;

use App\Ajout_bien;
use App\Bien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Parametre;
use App\Ressource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use function Ramsey\Uuid\v1;

class UserController extends Controller {

 // -------------------- [ user registration view ] -------------
    public function index() {
       
        $parametres=Parametre::all();
        return view('/inscription',compact('parametres'));
    }

// --------------------- [ Register user ] ----------------------
    public function userPostRegistration(Request $request) {

        request()->validate(
             [
                    'role'=> ['required'],
                    'first_name' => ['required','string'],
                    'last_name'=> ['required','string'],
                    'email'=> ['required','email'],
                    'phone'=> ['required','integer'],
                    'password'=> ['required','min:3','max:6',],
                    'confirm_password'=> ['required','same:password'],     
            ]);

        // $input          =           $request->all();

        // if validation success then create an input array
        $utilisateurs = new User();
        $utilisateurs->role_id =$request->input('role');
        $utilisateurs->first_name =$request->input('first_name');
        $utilisateurs->last_name =$request->input('last_name');
        $utilisateurs->email =$request->input('email');
        $utilisateurs->phone =$request->input('phone');
        $utilisateurs->password = Hash::make(request('password'));
        $utilisateurs->save();
         
        
        // if registration success then return with success message
        if(!is_null($utilisateurs)) {
            return back()->with('success', 'Votre inscription a été effectué avec succes');
        }

        // else return with error message
        else {
            abort(404);
        }
    }

// -------------------- [ User login view ] -----------------------
    public function userLoginIndex() {
        return view('/connexion');
    }


// --------------------- [ User login ] ---------------------
    public function userPostLogin(Request $request) {

        $request->validate([
            "email"           =>    "required|email",
            "password"        =>    "required|min:6"
        ]);

        $userCredentials = $request->only('email', 'password');
        $recuperation = DB::select('select role_id  from users where email=?',[$request->input('email')]);
       
        // check user using auth function
        if (Auth::attempt($userCredentials)&& $recuperation[0]->role_id ==1) {
        return redirect()->intended('dashboard');

    }elseif (Auth::attempt($userCredentials)&& $recuperation[0]->role_id ==2) {
        return redirect()->intended('locataires.locataire');

    }else {
        return back()->with('error', 'Email ou Mot de passe incorrect');
    }
}


// ------------------ [ User Dashboard Section ] ---------------------
    public function dashboard() {

        // check if user logged in
        if(Auth::check()) {
        $products=Ajout_bien::where('user_id', Auth::user()->id)->paginate(4);
        return view('dashboard',compact('products'));
    }
        return redirect::to("/connexion")->withError("Veuillez vous connecter s'il vous plait");
}
// ------------------ [ locataire Section ] ---------------------
    public function locataire() {
        if(Auth::check()) {
        $utilisateurs = User::all();
        $products = Ajout_bien::paginate(3);
        return view('locataires.locataire',compact('products','utilisateurs'));
    }
        return redirect::to("/connexion")->withError("Veuillez vous connecter s'il vous plait");
}
// ------------------- [ User logout function ] ----------------------
public function logout(Request $request ) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/connexion');
    }

    // ------------------- [ User upadate function ] ----------------------

public function Vue(){

        $parametre_biens=Bien::all();
        $parametres=Parametre::all();
        $parametre_ressources=Ressource::all();   
        return view('modifier',compact('parametre_biens','parametre_bien_ressources','parametres'));

    }

public function Update_account(Request $request)  {
 
    request()->validate(
        [
            'role'=> ['required'],
            'first_name' => ['required','string'],
            'last_name'=> ['required','string'],
            'email'=> ['required','email'],
            'phone'=> ['required','integer'],
            'password'=> ['required','min:3','max:6',],
            'confirm_password'=> ['required','same:password'],     
        ]);
        $utilisateurs = Auth::user();
        $utilisateurs->role_id =$request->input('role');
        $utilisateurs->first_name =$request->input('first_name');
        $utilisateurs->last_name =$request->input('last_name');
        $utilisateurs->email =$request->input('email');
        $utilisateurs->phone =$request->input('phone');
        $utilisateurs->password = Hash::make(request('password')); 
        $utilisateurs->save();
        return redirect('/connexion')->with('success','Modification effectuée avec succes,Connectez-vous avec vos nouveau identifiants');
    

    }  
}


