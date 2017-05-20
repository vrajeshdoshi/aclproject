<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        return view('user');
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


        // Create and save the user
        
        // 1. User::create or
        // 2. User::register

        //$user=User::create(request(['name','email','password']));
        $user =User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),            
            'verified' => "Yes",
       ] );      
        // $User = new User();
        // $User->name = request('name');
        // $User->email = request('email');
        // $User->password = bcrypt(request('password'));
        // $User->verified = "Yes";
        // $User->save();

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
        $user = User::find($id);
        //dd($job);
        return view('edit_user',compact('user'));
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
        'name' => 'required',
        'email' => 'required|string|email|max:255|unique:users,id,'.$id,        
        'verified' => 'required',                 
        ]);



        // Create and save the user
        
        // 1. User::create or
        // 2. User::register

        //$user=User::create(request(['name','email','password']));
        $user=User::where('id', $id)->update([
            'name' => request('name'),
            'email' => request('email'),              
            'verified' => request('verified')           
       ] );

        return redirect('/display_users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id',$id)->delete();
        return redirect('/display_users');
    }

    public function display(){
        $datas = array();
            $user_array = array();
            $user_data = User::get();

            foreach($user_data as $user){

             $role_data = $user->roles()->get();
             $role_array = array();
             foreach($role_data as $role){
                array_push($role_array, $role);
             }

            $user_array = array('user_id'=>$user->id,'user_name'=>$user->name, 'user_email'=>$user->email,'role'=>$role_array);
            array_push($datas, $user_array);
            }
            return view('usersview', ['users' => $datas]);
    }
}
