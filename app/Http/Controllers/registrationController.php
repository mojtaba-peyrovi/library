<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;

use Illuminate\Support\Facades\Hash;

class registrationController extends Controller

{
        public function create(){
        return view('registration');
    }

    public function store(){

        //validate formht
        $this->validate(request(),[

            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        //create and save user
        //$user = user::create(request(['name','email','password']));

        $user = user::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password')
        ]);


        //sign in the fa-users
        auth()->login($user);

        //redirect

        auth()->login($user);

        return redirect()->home();





    }
}
