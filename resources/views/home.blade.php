@extends('layouts.app')


@section('content')
@ifUserIs('admin')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Dashboard</h3></div>

                <div class="panel-body">
                    <h4>User Roles</h4>
                    <a href="{{ route('create_role') }}">Create Role of User</a> | 
                    <a href="{{ route('assign_role') }}">Assign Role To User</a> | 
                    <a href="{{ route('revoke_role') }}">Revoke Role From User</a> <br> 
                   <!--  <a href="{{ route('create_role') }}">Sync (Can be merged with Assign role)</a>  |-->
                    <h4>Role Permissions</h4>
                    <a href="{{ route('create_permission') }}">Create Permission</a> | 
                    <a href="{{ route('assign_permission') }}">Assign Permission To Role</a> | 
                    <a href="{{ route('revoke_permission') }}">Revoke Permission From Role</a> <br>
@endif
@ifUserIs('admin|job manager')                    
                    <h4>Job Posts</h4>
                    <a href="{{ route('create_post') }}">Create Job Post</a> |
                    <a href="{{route('my_posts', Auth::id())}}">View My Job Posts</a> |
                    
@endif
@ifUserIs('admin|job manager')
<a href="{{ route('display_posts') }}">View All Job Posts</a>
<br>
@endif
@ifUserIs('admin|user manager')
                    <h4>Users</h4>
                    <a href="{{ route('create_user') }}">Create User</a> |
                    <a href="{{ route('display_users') }}">View User</a>
                    <br>
@endif
@ifUserIs('admin')
                    <h4>Job Types</h4>
                    <a href="{{ route('create_jobtype') }}">Create Job Types</a> |
                    <a href="{{ route('display_jobtypes') }}">View Job Types</a>
                    <br>
                    <h4>Job Category</h4>
                    <a href="{{ route('create_category') }}">Create Job Category</a> |
                    <a href="{{ route('display_categories') }}">View Job Category</a>
                    <br>
                    <h4>Job Location</h4>
                    <a href="{{ route('create_location') }}">Create Job Location</a> |
                    <a href="{{ route('display_locations') }}">View Job Location</a>
@endif
                </div>
            </div>
        </div>
    </div>
</div>

@ifUserIs('job seeker')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="{{ route('display_verified_posts') }}">View All Job Posts</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@ifUserIs('job provider')
@if(count($company) == 0)
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Company Details</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register_company') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Company Name*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address*</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                            <label for="website" class="col-md-4 control-label">Website</label>

                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control" name="website" value="{{ old('website') }}" autofocus>

                                @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Company Description*</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                    

                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<h4>Job Posts</h4>
                    <a href="{{ route('create_post') }}">Create Job Post</a> |
                    <a href="{{route('my_posts', Auth::id())}}">View My Job Posts</a> |
                    <a href="{{ route('display_verified_posts') }}">View All Job Posts</a>
<br>
@endif
@endif
@endsection








