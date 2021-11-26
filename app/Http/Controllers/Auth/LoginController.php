<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function index() {
        //
        return view('auth.login');
    }
    
    public function authenticate(Request $request)
    {        
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'As credenciais informadas não foram encontradas.',
        ]);
    }
}
