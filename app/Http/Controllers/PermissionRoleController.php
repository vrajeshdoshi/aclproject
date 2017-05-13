<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use App\Role;
use App\PermissionRole;
class PermissionRoleController extends Controller
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
        $permissions = Permission::get();
        $roles = Role::get();
      //  dd($users);
        return view('assign_permission', ['permissionData' => $permissions, 'roleData' => $roles]);
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
        'role_id' => 'required',
        'permission_id' => 'required'        
        ]);

       // $user = User::find(request('user_id'));
        $adminRole = Role::find(request('role_id'));
        $r = request('permission_id');
        $adminRole->permissions()->attach($r);
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
    public function displayPermissions(){
        $role_data = Role::get();
        foreach($role_data as $data){
            $name = $data->name;
            $permissions = Role::find($data->id)->permissions()->get();
            foreach($permissions as $permission){
                $data = $permission->name;
                $permissionId = $permission->pivot->permission_id;
                $roleId = $permission->pivot->role_id;
                $arr_data = array('id'=>$permissionId,'roleId'=>$roleId,'permission'=>$data,'name'=>$name);
                $datas[]=$arr_data;
            }
        }
        return view('revoke_permission', ['roles' => $datas]);
    }
    public function destroy($id,$roleId)
    {
        $role = Role::find($roleId);
       $role->permissions()->detach($id);
        return redirect('/home');
    }
}
