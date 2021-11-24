<?php

namespace App\Http\Controllers;

use App\UserGithub;
use Illuminate\Http\Request;

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
        return view('app.config.user-config');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserGithub  $userGithub
     * @return \Illuminate\Http\Response
     */
    public function show(UserGithub $userGithub)
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
    public function destroy(UserGithub $userGithub)
    {
        //
    }
}
