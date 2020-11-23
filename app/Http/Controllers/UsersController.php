<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function home(){
        return view('home');
    }

    public function login(){
        return view('login');
    }

    public function attempLogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            
        
            return redirect()
                    ->route('home')
                    ->with('status','Voce esta logado como usuario!');

        }

        return redirect()
                ->intended(route('login'))
                ->with('status','Erro ao autenticar');
    }
}
