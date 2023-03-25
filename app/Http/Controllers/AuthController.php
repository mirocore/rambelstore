<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    
    public function login(){
        return Inertia::render( "Auth2/Login" );
    }

    public function doLogin(Request $request){

        // TODO VALIDATION

        // INTENTO LOGUEAR
        if(!auth()->attempt( $request->only('email', 'password'))){
            return back()->with('message', [
                "estilo" => "Error",
                "text"   => "Credenciales incorrectas"
            ]);
        }
        
        return redirect()->route("product.index");
    }

    public function logout(){
        auth()->logout();
	    return redirect()->route('login');
    }
}
