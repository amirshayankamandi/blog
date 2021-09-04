<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
class SessionsController extends Controller
{

    public function create()
    {
            return view('login.create'); 
    }

    public function store(){
        
        //valid the request
        $attributes =request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //attempt to authenticate and log the user
        if (! auth()->attempt($attributes)){

            throw ValidationException::withMessages([
                'email' => 'Your Provided credentials could not be verifed.'
                ]);
            }    
            
            session()->regenerate();
            return redirect('/')->with('success','Welcome Back');
      
    }


    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Good Bye');
    }
}
