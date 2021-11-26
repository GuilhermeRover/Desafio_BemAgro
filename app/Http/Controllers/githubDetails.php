<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class githubDetails extends Controller
{
    //
    public function index(Request $request) {
        $token = Auth::user()->token;
        //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
        $gitSearch = Http::withToken($token)->get('https://api.github.com/users/'.$request->idUserGithub);
        
        return view('app.github-details', [
            'gitSearch' => $gitSearch,
        ]);
    }
}
