<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Parametre;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller {

 // -------------------- [ user registration view ] -------------
    public function index() {
        $parametres=Parametre::all();
        return view('/inscription',compact('parametres'));
    }

// --------------------- [ Register user ] ----------------------
    public function userPostRegistration(Request $request) {

        // validate form fields
        // $request->validate([
        //         'role'              =>      'required',
        //         'first_name'        =>      'required',
        //         'last_name'         =>      'required',
        //         'email'             =>      'required|email',
        //         'phone'             =>      'required|max:10',
        //         'password'          =>      'required|min:6',
        //         'confirm_password'  =>      'required|same:password',
                
        //     ]);
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
         return 'ok my guy';
        
        // if registration success then return with success message
        if(!is_null($utilisateurs)) {
            return back()->with('success', 'You have registered successfully.');
        }

        // else return with error message
        else {
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
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
            return 'locataire';

        }else {
            return back()->with('error', 'Whoops! invalid username or password.');
        }
    }


// ------------------ [ User Dashboard Section ] ---------------------
    public function dashboard() {

        // check if user logged in
        if(Auth::check()) {
            return view('dashboard');
        }

        return redirect::to("/connexion")->withError('Oopps! You do not have access');
    }


// ------------------- [ User logout function ] ----------------------
public function logout(Request $request ) {
    $request->session()->flush();
    Auth::logout();
    return Redirect('/connexion');
    }
}
