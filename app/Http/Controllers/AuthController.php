<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function store(){
        $valid = request()->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8'  
        ]);

        $user = new User;
        $user->name = $valid['name'];
        $user->email = $valid['email'];
        $user->password = Hash::make($valid['password']);
        $user->save();

        return redirect()->route('login');
    }

    public function login(){

    }

    public function authenticate(){

    }
}
