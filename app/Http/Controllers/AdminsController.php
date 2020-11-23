<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    //
    public function home(){
        return view('admins.home');
    }

    public function login(){
        return view('admins.login');
    }

    public function attempLogin(Request $request){
        if(Auth::guard('admin')->attempt($request->only('email','password'))){
            
            return redirect()
                ->intended(route('admin.home'))
                ->with('status','Voce esta logado como admin!');

        }

        return redirect()
                ->intended(route('admin.login'))
                ->with('status','Erro ao autenticar');
    }
}
