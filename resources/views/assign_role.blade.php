@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
    	<div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card">
                    <div class="header bg-red">
                        <h2 align="center">Assign Role</h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{route('a_r')}}">
                        {{csrf_field()}}
                        	<div>
                        	<label for="user_id">Select User</label>
	                            <select id = 'user_id' name = 'user_id' class="form-control show-tick" data-live-search="true">
	                                 @foreach($userData as $user)
						                <option value = {{ $user->id }}>{{$user->name}}</option>     
						            @endforeach
	                            </select>
                            </div>
                            <br/>
                            <div>
                            	<label for="role_id">Select Role</label>
                                <select id = 'role_id' name = 'role_id[]' class="form-control show-tick" multiple>
                                    @foreach($roleData as $role)
                						<option value = {{ $role->id }}>{{$role->name}}</option>
            						@endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Create Role</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection