<?php

namespace App\Http\Controllers;

use App\Models\Cuentas;
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'fecha' => 'required',
            'password' => 'required',
            'dui' => 'required',
        ], [
            'name.required' => 'El campo nombre es obligatorio.',
            'email.required' => 'El campo correo electrónico es obligatorio.',
            'fecha.required' => 'El campo fecha de nacimiento es obligatorio.',
            'password.required' => 'El campo contraseña es obligatorio.',
            'dui.required' => 'El campo DUI es obligatorio.',
        ]);

        $user = new User();
        $user->name =$request->name;
        $user->password =Hash::make($request->password);
        $user->fecha =$request->fecha;
        $user->email =$request->email;
        $user->dui =$request->dui;
        $user->tipousuario ='comun';
        $user->save();

        Auth::login($user);

        return redirect(route('login'));
        

    }
    public function registeradmin(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'fecha' => 'required',
            'password' => 'required',
            'dui' => 'required',
        ], [
            'name.required' => 'El campo nombre es obligatorio.',
            'email.required' => 'El campo correo electrónico es obligatorio.',
            'fecha.required' => 'El campo fecha de nacimiento es obligatorio.',
            'password.required' => 'El campo contraseña es obligatorio.',
            'dui.required' => 'El campo DUI es obligatorio.',
        ]);


        $user = new User();
        $user->name =$request->name;
        $user->password =Hash::make($request->password);
        $user->fecha =$request->fecha;
        $user->email =$request->email;
        $user->dui =$request->dui;
        $user->tipousuario =$request->tipousuario;
        $user->save();
        // $user->all();
        // $usuarios=User::All();

        // Auth::login($user);
        // dd($usuarios);

        // return view('admin')->with('ususarios', $usuarios);
        return redirect(route('admin'));
        

    }

    public function login(Request $request) {
      
        //Validacion
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'El campo correo electrónico es obligatorio.',
            'password.required' => 'El campo constraseña es obligatorio.',

        ]);

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
            $user_id = Auth::id();
            $cuentas = Cuentas::where('user_id', $user_id)->get();
            return view('secret')->with('cuenta', $cuentas);
        } else if(Auth::attempt($credenciale2,$recordar)){
            $request->session()->regenerate();
            return redirect()->intended(route('admin'));
        } else {
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
