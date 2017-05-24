@extends('layouts.app')
@section('content')
@ifUserIs('admin')
<div class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard</h2>
        </div>
        <!-- Basic Example -->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card cust-card-head">
                    <div class="header bg-red">
                        <h2>User Roles</h2>
                    </div>
                    <div class="body">
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_role') }}">Create Role of User</a>
                        {{-- <br> --}}
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('assign_role') }}">Assign Role To User</a>
                        {{-- <br> --}}
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('revoke_role') }}">Revoke Role From User</a>
                        {{-- <br> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card cust-card-head">
                    <div class="header bg-red">
                        <h2 >Role Permissions</h2>
                    </div>
                    <div class="body">
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_permission') }}">Create Permission</a>
                        {{-- <br> --}}
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('assign_permission') }}">Assign Permission To Role</a>
                        {{-- <br> --}}
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('revoke_permission') }}">Revoke Permission From Role</a>
                        {{-- <br> --}}
                    </div>
                </div>
            </div>
            @endif
            @ifUserIs('admin|job manager|job provider')
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card cust-card-head">
                    <div class="header bg-red">
                        <h2>Job Posts</h2>
                    </div>
                    <div class="body cust-card-head">
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_post') }}">Create Job Post</a>
                        {{-- <br> --}}
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{route('my_posts', Auth::id())}}">View My Job Posts</a>
                        {{-- <br> --}}
                      @endif
                      @ifUserIs('admin|job manager')
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_posts') }}">View All Job Posts</a>
                        {{-- <br> --}}
                      @endif
                      @ifUserIs('job provider')
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_verified_posts') }}">View All Job Posts</a>
                      @endif
                      @ifUserIs('admin|user manager')
                    </div>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card cust-card-head">
                    <div class="header bg-red">
                        <h2>User</h2>
                    </div>
                    <div class="body">
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_user') }}">Create User</a>
                        {{-- <br> --}}
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_users') }}">View User</a>
                        {{-- <br> --}}
                    </div>
                </div>
            </div>
            @endif
            @ifUserIs('admin')
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card cust-card-head">
                    <div class="header bg-red">
                        <h2>Job Types</h2>
                    </div>
                    <div class="body">
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_jobtype') }}">Create Job Types</a>
                        {{-- <br> --}}
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_jobtypes') }}">View Job Types</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card cust-card-head">
                    <div class="header bg-red">
                        <h2>Job Category</h2>
                    </div>
                    <div class="body">
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_category') }}">Create Job Category</a>
                        {{-- <br> --}}
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_categories') }}">View Job Category</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card cust-card-head">
                    <div class="header bg-red">
                        <h2>Job Location</h2>
                    </div>
                    <div class="body">
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_location') }}">Create Job Location</a>
                        {{-- <br> --}}
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_locations') }}">View Job Location</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@ifUserIs('job seeker')
<div class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard</h2>
        </div>
        <!-- Basic Example -->
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card cust-card-head">
                    <div class="header bg-red">
                        <h2>Hello  Seeker</h2>
                    </div>
                    <div class="body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@ifUserIs('job provider') @if(count($company) == 0)
<div class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card cust-card-head">
                    <div class="header">
                        <h2>Company Details</h2>
                    </div>
                    <div class="body">
                        <form role="form" method="POST" action="{{ route('register_company') }}">
                            {{ csrf_field() }}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                    <label class="form-label">Company Name</label>
                                </div>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required>
                                        <label class="form-label">Company Description</label>
                                    </div>
                                </div>
                                @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endif
@endsection
