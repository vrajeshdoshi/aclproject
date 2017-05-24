<?php

namespace App\Http\Controllers;

use App\CategoryJobpost;
use Illuminate\Http\Request;

class CategoryJobpostController extends Controller
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
     * @param  \App\CategoryJobpost  $categoryJobpost
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryJobpost $categoryJobpost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryJobpost  $categoryJobpost
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryJobpost $categoryJobpost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryJobpost  $categoryJobpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryJobpost $categoryJobpost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryJobpost  $categoryJobpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryJobpost $categoryJobpost)
    {
        //
    }
}
