<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Password;

class RegisteredUserController extends Controller
{
    //
    public function create(){
        return view('auth.register');
    }
   

    public function store(){
        $attr = request()->validate([
            'name'=>['required','string','min:3'],
            'email'=>['required','string'],
            'password'=>['required', 'confirmed'],
        ]);

        $user = User::create($attr);
        Auth::login($user);

        return redirect('/jobs');
    }
}
