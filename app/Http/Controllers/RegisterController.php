<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request){
        
        //dd($request);
        $request->request->add(['username'=>Str::slug($request->username)]);


        //validacion
        $this->validate($request, [
            'name' => 'required|max:40',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:40',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'name'=>$request->name,
            'username'=>$request->username,            
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]); 


        //autenticar usuario
        /*
        auth()->attempt([
            'username'=>$request->username,
            'password'=>$request->password,
        ]);
        */

        //Otra forma de autenticar 
        auth()->attempt($request->only('email', 'password'));

        //redireccionar
        return redirect()->route('posts.index');

    }
}