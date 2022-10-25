<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    //

    public function register(){
        return inertia::render('register');
    }

    public function login(){
        return inertia::render('login');
    }

    //save Users
    public function store(CreateUserRequest $request){

    }
}
