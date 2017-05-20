<?php

namespace App\Http\Controllers;

use App\Jobpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobtype;
use App\Category;
use App\LocationCity;
class JobpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $jobtypes = Jobtype::all();
        $jobcategories = Category::all();
        $joblocations = LocationCity::all();
        return view('jobpost', compact('jobtypes','jobcategories','joblocations'));
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
        'name' => 'required|unique:roles',
        'company' => 'required',
        'description' => 'required', 
        'experience' => 'required',
        'jobtype' => 'required',
        'jobcategory' => 'required',
        'joblocation' => 'required',
        'package' => 'required',       
        ]);


        // Create and save the user
        
        // 1. User::create or
        // 2. User::register

        //$user=User::create(request(['name','email','password']));
        $job=Jobpost::create([
            'name' => request('name'),
            'company' => request('company'),
            'slug' => strtolower(request('name')),
            'description' => request('description'),
            'experience' => request('experience'),
            'category_id' => request('jobcategory'),
            'package' => request('package'),
            'user_id' => Auth::user()->id           
       ] );



//$user = User::find(request('user_id'));
 $r = request('jobtype');
 $job->jobtypes()->attach($r);

 $q = request('joblocation');
 $job->locationcity()->attach($q);

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function show(Jobpost $jobpost)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   /*dd($id);*/
        $jobtypes = Jobtype::all();
        $jobcategories = Category::all();
        $joblocations = LocationCity::all();
        $typesselect = array();
        $locationsselect = array();        
        $job = Jobpost::find($id);
        foreach($job->jobtypes as $jobtype)
        {
            $jobtype_id = $jobtype->pivot->jobtype_id;
            $jobtp = Jobtype::where('id',$jobtype_id)->get()->first()->name;
            array_push($typesselect, $jobtp);
        }
        foreach($job->locationcity as $loc_city)
        {
            $loc_id = $loc_city->pivot->location_city_id;
            $loc_name = LocationCity::where('id',$loc_id)->get()->first()->name;
            array_push($locationsselect,$loc_name);
        }
        //dd($job);
        return view('edit_job',compact('job','typesselect','locationsselect','jobtypes','jobcategories','joblocations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'name' => 'required|unique:jobposts,id,'.$id,
        'company' => 'required',
        'description' => 'required', 
        'experience' => 'required',
        'jobtype' => 'required',
        'jobcategory' => 'required',
        'joblocation' => 'required',
        'package' => 'required',
        'verified' => 'required',       
        ]);


        // Create and save the user
        
        // 1. User::create or
        // 2. User::register

        //$user=User::create(request(['name','email','password']));
        $job=Jobpost::where('id', $id)->update([
            'name' => request('name'),
            'company' => request('company'),
            'slug' => strtolower(request('name')),
            'description' => request('description'),
            'experience' => request('experience'),
            'category_id' => request('jobcategory'),
            'package' => request('package'),
            'verified' => request('verified')           
       ] );
        //dd($job);
        $job = Jobpost::find($id);
     $job->jobtypes()->detach();   
$r = request('jobtype');
 $job->jobtypes()->attach($r);
$job->locationcity()->detach(); 
 $q = request('joblocation');
 $job->locationcity()->attach($q);
        return redirect('/display_posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Jobpost::where('id',$id)->delete();
        return redirect('/display_posts');
    }

    public function display(){
        $data = Jobpost::get();
        $job_data = array();
        $jobs = array();
        foreach($data as $job)
        {
            $job_data['info'] = $job;
            $job_data['user'] = $job->user->name;
            $job_data['joblocations'] = $job->locationcity;
            $job_data['jobcategory'] = $job->category->name;
            $job_data['jobtypes'] = $job->jobtypes;
            array_push($jobs, $job_data);
        }
        
        return view('jobsview', compact('jobs'));
    }
}
