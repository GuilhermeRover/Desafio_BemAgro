<?php

namespace App\Http\Controllers;

use App\UserGithub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserGithubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        //
        $user = Auth::user();
        $usersGithub = DB::table('user_github')->get();
        //dd($usersGithub);
        return view('app.dashboard', ['user' => $user, 'usersGithub' => $usersGithub]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $token = Auth::user()->token;
        $username = $request->username;

        $gitSearch = Http::withToken($token)->get('https://api.github.com/users/'.$username);
        
        if (!$gitSearch->failed()) {
            $store = UserGithub::create([
                'avatar_url' => $gitSearch->json()['avatar_url'],
                'login' => $gitSearch->json()['login'],
                'name' => $gitSearch->json()['name'],
                'email' => $gitSearch->json()['email'],
                'company' => $gitSearch->json()['company'],
                'location' => $gitSearch->json()['location'],
                'html_url' => $gitSearch->json()['html_url'],
            ]);
            
            if ($store) {
                return redirect()->route('dashboard.index');
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserGithub  $userGithub
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserGithub  $userGithub
     * @return \Illuminate\Http\Response
     */
    public function edit(UserGithub $userGithub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserGithub  $userGithub
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserGithub $userGithub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserGithub  $userGithub
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $userGithub = UserGithub::find($id);
        $userGithub->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the shark!');
        return redirect()->route('dashboard.index');
    }

    public function gitSearch(Request $request)
    {
        //
        //dd($request->search);
        $token = Auth::user()->token;
        $username = $request->search;
        
        $user = Auth::user();

        $gitSearch = Http::withToken($token)->get('https://api.github.com/users/'.$username);
        if (!$gitSearch->failed()) {
            return view('app.github-search', ['user' => $user, 'gitSearch' => $gitSearch]);
        }
        return redirect()->back();
    }

}