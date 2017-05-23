<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\UserActivation;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyStaff;
use App\Jobpost;
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

    public function quickRandom($length = 30)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
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
        ]);

       // 'password' => 'required|string|min:6|confirmed',            
        // Create and save the user
        
        // 1. User::create or
        // 2. User::register

        //$user=User::create(request(['name','email','password']));
            $pass = $this->quickRandom(6);
        $user =User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => $pass,            
            'verified' => "Yes",
       ] ); 

       $tokenData = $this->quickRandom();
        $activationtoken = UserActivation::create([
                'user_id' => $user->id,
                'token' => $tokenData,
            ]);
       // dd($tokenData);
        Mail::to($user->email)->send(new VerifyStaff($tokenData,$user->name,$activationtoken->id,$pass,request('email')));    
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
        Jobpost::where('user_id',$id)->delete();
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
             $company = $user->company;             
            $user_array = array('user_id'=>$user->id,'user_name'=>$user->name, 'user_email'=>$user->email,'role'=>$role_array,'company'=>$company);
            array_push($datas, $user_array);
            }
            return view('usersview', ['users' => $datas]);
    }

    public function activate($token,$id){
        $tokendata = UserActivation::where('token',$token)->find($id);
        if($tokendata != null){
           // dd($tokendata->user_id);
            UserActivation::where('user_id',$tokendata->user_id)->forceDelete();           
            $token = User::where('id', $tokendata->user_id)->update([
            'is_activated' => 1            
       ] );
        return redirect('/login');
        }
        else{
            return view('redirection');
        }
    }

    public function activate_staff($token,$id){
        $tokendata = UserActivation::where('token',$token)->find($id);
        if($tokendata != null){           
           // UserActivation::where('user_id',$tokendata->user_id)->forceDelete();           
           /* $token = User::where('id', $tokendata->user_id)->update([
            'is_activated' => 1            
       ] );*/
            $user_id = $tokendata->user_id;
           // dd($user_id);
            return view('set_password', compact('user_id'));
        }
        else{
            return view('redirection');
        }
    }

    
    public function store_password(Request $request, $id){

       // UserActivation::where('user_id',$id)->forceDelete();
        $this->validate($request,[
        'pass' => 'required',
        'password' => 'required|string|min:6|confirmed',      
        ]);



        // Create and save the user
        
        // 1. User::create or
        // 2. User::register
        //dd(request('password')." ".request('new_password'));
        
        $user=User::where('password', request('pass'))->update([
            'is_activated' => 1,            
            'password' => bcrypt(request('password')),            
       ] );
       // dd($user);
       if($user == 0)
       {
        $data = "Your Password was incorrect. Please retry";
        return back()->withInput();
       }
       else{
        UserActivation::where('user_id',$id)->forceDelete();           
        return redirect('/login');
       }

        
    }

}
