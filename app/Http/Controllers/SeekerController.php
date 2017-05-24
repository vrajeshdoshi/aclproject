<?php

namespace App\Http\Controllers;

use App\Seeker;
use Illuminate\Http\Request;

class SeekerController extends Controller
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
        return view('register_seeker');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[            
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',     
        ]);
     

        //$user=User::create(request(['name','email','password']));
        $seeker=Seeker::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))           
       ]);

        $roleuser = RoleUser::create([
            'role_id' => 4,
            'user_id' => $seeker->id
            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seeker  $seeker
     * @return \Illuminate\Http\Response
     */
    public function show(Seeker $seeker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seeker  $seeker
     * @return \Illuminate\Http\Response
     */
    public function edit(Seeker $seeker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seeker  $seeker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seeker $seeker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seeker  $seeker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seeker $seeker)
    {
        //
    }

    public function dashboard(){
        return view('seekerhome');
    }
}
