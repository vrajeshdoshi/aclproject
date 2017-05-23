<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
//use App\CompanyUser;
use Illuminate\Support\Facades\Auth;
use App\User;
class CompanyController extends Controller
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
        $this->validate(request(),[
        'name' => 'required',
        'address' => 'required',
        'description' => 'required'        
        ]);


        // Create and save the user
        
        // 1. User::create or
        // 2. User::register

        //$user=User::create(request(['name','email','password']));
        $company = Company::create([
            'company' => request('name'),         
            'address' => request('address'),   
            'comp_desc' => request('description'),
            'website' => request('website'),
            'user_id' => Auth::user()->id          
       ] );

       /* CompanyUser::create([
            'company_id' => $company->id,
            'user_id' => Auth::user()->id,
            ]);*/

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $datas = array();
           // $company_array = array();
            $company_data = Company::where('user_id',$id)->get();

            foreach($company_data as $company){

             $user_name = $company->user->name;
             $user_email = $company->user->email;            
                        
             $company_array = array('company'=>$company,'user_name'=>$user_name, 'user_email'=>$user_email);            
            }
            return view('company_view', ['companies' => $company_array]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $company = Company::find($id);
        //dd($job);
        return view('edit_company',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'company' => 'required',        
        'comp_desc' => 'required', 
        'address' => 'required'                
        ]);
       
        if(request('website') == '')
        {
            $company=Company::where('id', $id)->update([
            'company' => request('company'),
            'comp_desc' => request('comp_desc'),              
            'address' => request('address')            
       ] );
        }
        else{        
        $company=Company::where('id', $id)->update([
            'company' => request('company'),
            'comp_desc' => request('comp_desc'),              
            'address' => request('address'),
            'website' => request('website')          
       ] );
    }
        //return Redirect::route('display_company, $id');
       return redirect('/display_users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comp = Company::where('id',$id)->get();
        $user_id = $comp->first()->user_id;
        $company = Company::where('id',$id)->delete();

        $user = User::where('id',$user_id)->delete();
        return redirect('/display_users');
    }

    public function display_company(){
            
    }
}
