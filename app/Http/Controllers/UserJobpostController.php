<?php

namespace App\Http\Controllers;

use App\UserJobpost;
use Illuminate\Http\Request;

class UserJobpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	  public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
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
     * @param  \App\UserJobpost  $userJobpost
     * @return \Illuminate\Http\Response
     */
    public function show(UserJobpost $userJobpost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserJobpost  $userJobpost
     * @return \Illuminate\Http\Response
     */
    public function edit(UserJobpost $userJobpost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserJobpost  $userJobpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserJobpost $userJobpost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserJobpost  $userJobpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserJobpost $userJobpost)
    {
        //
    }
}
