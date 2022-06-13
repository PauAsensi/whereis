<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    
    public function changePass(){
        return view('user.changePass');
    }

    public function updatePass(Request $request){
        $data=$request->validate([
            'password'=>['required', 'string', 'min:8', 'confirmed']
        ],[ 
            'password.required'=>"Este campo es obligatorio",
            'password.min' =>"Debe contener 8 caracteres minimo",
            'password.confirmed'=>"Las contraseñas no coinciden",
        ]);
        redirect()->back()->withErrors('');
        $paswd=Hash::make($data['password']);
        $data['password']=$paswd;
        auth()->user()->update($data);
        return view('home');
    }

    public function updateName(Request $request){
        $user=auth()->user();
        $user->name=$request['nombre'];
        $user->save();
        return redirect()->route('home');
    }

    public function updateEmail(Request $request){
        $data=$request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ],[ 
            'email.required'=>"Este campo es obligatorio",
            'email.email' =>"El campo debe contener un formato de correo valido",
            'email.unique'=>"El email ya esta en uso",
        ]);
        redirect()->back()->withErrors('');
        $user=auth()->user();
        $user->email=$data['email'];
        $user->save();
        return redirect()->route('home');
    }
    
}
