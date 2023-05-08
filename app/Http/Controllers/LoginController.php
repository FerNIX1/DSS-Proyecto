<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// ========================================
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

// ========================================



class LoginController extends Controller
{
    public function register(Request $request){
        //falta validar

        $user = new User();
        $user->name =$request->name;
        $user->password =Hash::make($request->password);
        $user->fecha =$request->fecha;
        $user->email =$request->email;
        $user->dui =$request->dui;
        $user->tipousuario ='comun';
        $user->save();

        Auth::login($user);

        return redirect(route('privada'));
        

    }
    public function registeradmin(Request $request){
        //falta validar

        $user = new User();
        $user->name =$request->name;
        $user->password =Hash::make($request->password);
        $user->fecha =$request->fecha;
        $user->email =$request->email;
        $user->dui =$request->dui;
        $user->tipousuario =$request->tipousuario;
        $user->save();

        Auth::login($user);

        return redirect(route('privada'));
        

    }

    public function login(Request $request){
        //falta validar
        $credenciale1 =[
            "email"=>$request->email,
            "password" => $request->password,
            "tipousuario"=>'comun',
            
        ];
        $credenciale2 =[
            "email"=>$request->email,
            "password" => $request->password,
            "tipousuario"=>'admin',
            
        ];

        $recordar = ($request->has('remember') ? true : false);
       
            if (Auth::attempt($credenciale1,$recordar)) {
                $request->session()->regenerate();
                return redirect()->intended(route('privada'));
            
            }else if(Auth::attempt($credenciale2,$recordar)){
                $request->session()->regenerate();
                return redirect()->intended(route('admin'));
            }else{
                return redirect('login');
            }
       
     
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
