<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class sessionsController extends Controller

{

    public function __construct(){

      $this->middleware('guest',['except'=>'destroy']);
    }



  public function create(){

      return view('sessions');

    }

    public function destroy(){

        auth()->logout();

        return redirect()->home();
      }

      public function store(){

          //attempt to authenticate users
            //if not, redirect ibase_backup
            if(! auth()->attempt(request(['email','password']))) {

                  return back()->withErrors([
                      'message' => 'please check your password'
                  ]);
            }


          //if so, sign them in
            return redirect()->home();





          //redirect to home page



        }
}
