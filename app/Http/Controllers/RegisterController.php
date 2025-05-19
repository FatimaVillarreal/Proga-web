<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){

        $this->validate(request(),[
            'nombre'=> 'required',
            'email'=> 'required|email',
            'password'=>'required',
            'tipoUsuario'=>'required',
        ]);
        
        $user = User::create(request(['nombre','email','password','tipoUsuario']));
        auth()->login($user);
        return redirect()->to('/login');
    }
}
