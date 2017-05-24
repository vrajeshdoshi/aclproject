<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobtype;
class JobtypeController extends Controller
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
        return view('jobtype');
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
            'description' => 'required',            
        ]);


        // Create and save the user
        
        // 1. User::create or
        // 2. User::register

        //$user=User::create(request(['name','email','password']));
        $user =Jobtype::create([
            'name' => request('name'),
             'slug' => strtolower(request('name')),
            'description' => request('description'),
            
       ] );      
        

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobtype = Jobtype::find($id);
        //dd($job);
        return view('edit_jobtype',compact('jobtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'name' => 'required|unique:jobtypes',
        'description' => 'required',        
        ]);


        // Create and save the user
        
        // 1. User::create or
        // 2. User::register

        //$user=User::create(request(['name','email','password']));

        $user=Jobtype::where('id', $id)->update([
            'name' => request('name'),            
            'description' => request('description'),               
       ] );

        return redirect('/display_jobtypes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobtype = Jobtype::where('id',$id)->delete();
        return redirect('/display_jobtypes');
    }
    public function display(){
        $jobtypes = Jobtype::get();
        return view('display_jobtypes', compact('jobtypes'));
    }
}
