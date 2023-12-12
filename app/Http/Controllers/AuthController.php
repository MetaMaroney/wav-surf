<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
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

        $profile = new Profile;
        $profile->username = $user->name;
        $profile->user_id = $user->id;
        $profile->save();

        return redirect()->route('login');
    }

    public function login(){
        return view('auth.login');
    }

    public function authenticate(){
        $valid = request()->validate([
            'email' => 'required|email',
            'password' => 'required'  
        ]);

        if (auth()->attempt($valid)){
            request()->session()->regenerate();
            return redirect()->route('posts.index');
        }

        return redirect()->route('login');
    }

    public function logout(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('posts.index');
    }
}
