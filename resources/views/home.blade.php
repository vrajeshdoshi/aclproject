@extends('layouts.app')

@section('content')
@ifUserIs('admin')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        <h2 align="center">User Roles</h2>
                    </div>
                    <div class="body">
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_role') }}">Create Role of User</a>
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('assign_role') }}">Assign Role To User</a>
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('revoke_role') }}">Revoke Role From User</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        <h2 align="center">Role Permissions</h2>
                    </div>
                    <div class="body">
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_permission') }}">Create Permission</a>
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('assign_permission') }}">Assign Permission To Role</a>
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('revoke_permission') }}">Revoke Permission From Role</a>
                    </div>
                </div>
            </div>
        @endif
        
        @ifUserIs('admin')
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        <h2 align="center">Job Posts</h2>
                    </div>
                    <div class="body">
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_post') }}">Create Job Post</a>
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{route('my_posts', Auth::id())}}">View My Job Posts</a>
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_posts') }}">View All Job Posts</a>
                    </div>
                </div>
            </div>

        @endif
        @ifUserIs('job manager')
        <section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-4 ">
                        <div class="card">
                            <div class="header bg-red">
                                <h2 align="center">Job Posts</h2>
                            </div>
                            <div class="body">
                                <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_post') }}">Create Job Post</a>
                                <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{route('my_posts', Auth::id())}}">View My Job Posts</a>
                                <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_posts') }}">View All Job Posts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
            <div>
            @ifUserIs('admin')
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2 align="center">Users</h2>
                        </div>
                        <div class="body">
                            <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_user') }}">Create User</a>
                            <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_users') }}">View User</a>
                        </div>
                    </div>
                </div>
            @endif
            @ifUserIs('user manager')
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-4 col-lg-offset-4">
                    <div class="card">
                        <div class="header bg-red">
                            <h2 align="center">Users</h2>
                        </div>
                        <div class="body">
                            <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_user') }}">Create User</a>
                            <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_users') }}">View User</a>
                        </div>
                    </div>
                </div>
            @endif
            @ifUserIs('admin')
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2 align="center">Job Types</h2>
                        </div>
                        <div class="body">
                            <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_jobtype') }}">Create Job Types</a>
                            <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_jobtypes') }}">View Job Types</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2 align="center">Job Category</h2>
                        </div>
                        <div class="body">
                            <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_category') }}">Create Job Category</a>
                            <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_categories') }}">View Job Category</a>
                        </div>
                    </div>
                </div>
                </div>
            @endif
            @ifUserIs('admin')
                <div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="header bg-red">
                                <h2 align="center">Job Location</h2>
                            </div>
                            <div class="body">
                                <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_location') }}">Create Job Location</a>
                                <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_locations') }}">View Job Location</a>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</section>
@endif
@ifUserIs('job seeker')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-4 col-lg-offset-4">
                <div class="card">
                    <div class="header bg-red">
                        <h2 align="center">Dashboard</h2>
                    </div>
                    <div class="body">
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_verified_posts') }}">View All Job Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@ifUserIs('job provider')
@if(count($company) == 0)
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        <h2 align="center">Company Details</h2>
                    </div>
                    <div class="body">
                        <form  role="form" method="POST" action="{{ route('register_company') }}">
                        {{csrf_field()}}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Company Name*</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                  </div>
                              </div>
                          </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="address">Address*</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                  </div>
                              </div>
                            </div>

                            <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                              <label for="website">Website</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input id="website" type="text" class="form-control" name="website" value="{{ old('website') }}" autofocus>
                                    @if ($errors->has('website'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('website') }}</strong>
                                        </span>
                                    @endif
                                  </div>
                              </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                              <label for="description">Company Description*</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                  </div>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            @else
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-4 col-md-offset-4">
                <div class="card">
                    <div class="header bg-red">
                        <h2 align="center">Job Posts</h2>
                    </div>
                    <div class="body">
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('create_post') }}">Create Job Post</a>
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{route('my_posts', Auth::id())}}">View My Job Posts</a>
                        <a type="button" class="btn bg-blue waves-effect btn-cus" href="{{ route('display_verified_posts') }}">View All Job Posts</a>
                    </div>
                </div>
            </div>
            </div>
    </div>
</section>
        
@endif
@endif
@endsection