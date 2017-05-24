<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use App\RoleUser;
use Illuminate\Http\Request;

class RoleUserController extends Controller
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
        $users = User::get();
        $roles = Role::get();
      //  dd($users);
        return view('assign_role', ['userData' => $users, 'roleData' => $roles]);
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
        'user_id' => 'required',
        'role_id' => 'required'        
        ]);

        $user = User::find(request('user_id'));
       // $user->roles()->attach([$adminRole->, $editorRole->id]);
        // Create and save the user
        
        // 1. User::create or
        // 2. User::register

        //$user=User::create(request(['name','email','password']));
        $r = request('role_id');
       // dd($roles);
        /*$role=RoleUser::create([
            'user_id' => request('user_id'),
            // 'role_id' => request('role_id')                      
       ] );*/
        // $role = new RoleUser();
      // dd(r[0]);
       $user->roles()->syncWithoutDetaching($r);
        //$user->roles()->attach($r);
       // $user->roles()->sync($r);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function displayRoles()
    {   

        $user_data = User::get();
        foreach($user_data as $data){
            $email = $data->email;
            $roles = User::find($data->id)->roles()->get();
            foreach($roles as $role){
                $data = $role->name;
                $roleId = $role->pivot->role_id;
                $userId = $role->pivot->user_id;
                $arr_data = array('id'=>$roleId,'userId'=>$userId,'role'=>$data,'email'=>$email);
                $datas[]=$arr_data;
            }
        }
        return view('revoke_role', ['users' => $datas]);
    }*/

    public function displayRoles(){

        $datas = array();
            $user_array = array();
            $user_data = User::get();

            foreach($user_data as $user){

             $role_data = $user->roles()->get();
             $role_array = array();
             foreach($role_data as $role){
                array_push($role_array, $role);
             }

            $user_array = array('user_id'=>$user->id,'user_name'=>$user->name,'role'=>$role_array);
            array_push($datas, $user_array);
            }
            return view('revoke_role', ['users' => $datas]);
    }
    public function destroy($id,$userId)
    {
       $user = User::find($userId);
       $user->roles()->detach($id);
        return redirect('/home');
    }
}

