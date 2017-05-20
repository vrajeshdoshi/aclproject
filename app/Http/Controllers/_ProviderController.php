<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;
//use App\Role;
use App\RoleUser;
class _ProviderController extends Controller
{   

    protected $redirectTo = 'your redirect path after registration';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
  {
    return view('Registration View');
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
        return view('register_provider');
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
            'company' => 'required|string|max:255',
            'comp_desc' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',     
        ]);
     
        //$user=User::create(request(['name','email','password']));
        $provider=Provider::create([
            'company' => request('company'),
            'comp_desc' => request('comp_desc'),
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))           
       ] );
        $roleuser = RoleUser::create([
            'role_id' => 5,
            'user_id' => $provider->id
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        //
    }
}
