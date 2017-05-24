<?php

namespace App\Http\Controllers;
use App\LocationCity;
use Illuminate\Http\Request;

class LocationCityController extends Controller
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
        return view('location');
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
        $user =LocationCity::create([
            'name' => request('name'),             
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
         $location = LocationCity::find($id);
        //dd($job);
        return view('edit_location',compact('location'));
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
        'name' => 'required|unique:location_cities',
        'description' => 'required',        
        ]);


        // Create and save the user
        
        // 1. User::create or
        // 2. User::register

        //$user=User::create(request(['name','email','password']));

        $user=LocationCity::where('id', $id)->update([
            'name' => request('name'),            
            'description' => request('description'),               
       ] );

        return redirect('/display_locations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $location = LocationCity::where('id',$id)->delete();
        return redirect('/display_locations');
    }
    public function display(){
        $locations = LocationCity::get();
        return view('display_locations', compact('locations'));
    }
}
