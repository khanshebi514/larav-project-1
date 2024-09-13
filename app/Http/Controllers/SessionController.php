<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }
    public function store(){
        $attribute = request()->validate([
            'email'=> ['required','email'],
            'password'=> ['required'],
        ]);

        if( !Auth::attempt($attribute)){
            throw ValidationException::withMessages([
                'email'=> 'Your should enter correct credentials..!',
            ]);
        }
        
        request()->session()->regenerate();

        return redirect('/jobs');
    }

    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
