<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    public function home(){
        return view('clients.home');
    }

    public function login(){
        return view('clients.login');
    }

   
    public function attempLogin(Request $request){
        if(Auth::guard('client')->attempt($request->only('email','password'))){
            
            return redirect()
                ->intended(route('client.home'))
                ->with('status','Voce esta logado como cliente!');

        }

        return redirect()
                ->intended(route('client.login'))
                ->with('status','Erro ao autenticar');
    }
    
}
