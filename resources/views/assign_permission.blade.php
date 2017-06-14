@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
    	<div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card">
                    <div class="header bg-red">
                        <h2 align="center">Assign Permission</h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{route('c_r')}}">
                        {{csrf_field()}}
                        	<div>
                        	<label for="user_id">Select Role</label>
	                            <select id = 'role_id' name = 'role_id' class="form-control show-tick" data-live-search="true">
	                                @foreach($roleData as $role)
						                <option value = {{ $role->id }}>{{$role->name}}</option>
						            @endforeach
	                            </select>
                            </div>
                            <br/>
                            <div>
                            	<label for="role_id">Select Permission</label>
                                <select id = 'permission_id' name = 'permission_id[]' class="form-control show-tick" multiple>
                                    @foreach($permissionData as $permission)
						                <option value = {{ $permission->id }}>{{$permission->name}}</option>
						            @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Assign Permission To Role</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection