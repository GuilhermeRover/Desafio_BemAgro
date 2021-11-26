<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // register new user in Controllers/UserController.php
    public function index() {
        //
        return view('auth.register');
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $store = User::create([
            'name' => $request->name,
            'token' => $request->token,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        if ($store) {
            return redirect()->route('login');
            # code...
        }
        return redirect()->route('register');

    }
}
