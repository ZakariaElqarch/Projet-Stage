<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


class Auth0HandlerController extends Controller
{
    //
    public function logout()
    {   
        session()->forget('auth0\_\_user');
        return view('test');
    }
    public function login(){
        session()->forget('auth0\_\_user');
        return view('template.layouts.template');
    }

    /**
     */

}

