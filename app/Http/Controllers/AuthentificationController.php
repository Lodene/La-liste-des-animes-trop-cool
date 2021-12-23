<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; 

class AuthentificationController extends Controller{

    public function indexConnection()
    {
        return view("authentification.login");
    }

    public function indexRegister()
    {
        return view("authentification.register");
    }

    public function register(Request $request){        
        $request->validate([
            'pseudo' => 'required',
            'mail' =>  'required|email',
            'password' => 'required|min:6'
        ]);
        $usr = new User;
        $usr->usr_pseudo = request('pseudo');
        $usr->usr_mail = request('mail');
        $usr->usr_password = Hash::make(request('password'));
        $usr->usr_accounttype = 'user';       
        
        $usr->save();

        Auth::login($usr);
        return redirect('/');
    }
    
    public function login(Request $request){
        
        $credentials = $request->validate([
            'usr_mail' => 'required',
            'password' => 'required'
        ]);
        
        //dd($credentials);
        if (Auth::attempt(['usr_mail' => request('usr_mail'), 'password' =>request('password')])) {

            $request->session()->regenerate();
            return redirect()->intended('/');    

        // if (Auth::attempt($credentials)) {        
        }else{
            dd('t\'es naze');
        }
        
    }
}
