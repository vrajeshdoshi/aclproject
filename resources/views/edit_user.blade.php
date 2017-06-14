@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card">
                    <div class="header">
                        <h2 align="center">Create New User</h2>
                    </div>
                    <div class="body">
                        <form  role="form" method="POST" action="{{route('update_user', $user->id)}}">
                        {{csrf_field()}}
            			{{method_field('PUT')}}
                            <label for="name">Name</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="text" class="form-control" id="name" name="name" value = "{{$user->name}}" required>
                                  </div>
                              </div>
                          
                            
                              <label for="email">E-Mail Address</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="text" class="form-control" id="email" name="email" value = "{{$user->email}}" required>
                                  </div>
                              </div>

                              <div class="form-group">
					            <label for="verified">Verified</label>
					            <select id = 'verified' class="form-control show-tick" name = 'verified'>
					                <option value ="Yes" {{$user->verified == 'Yes' ? 'selected' : ''}}>Yes</option>              
					                <option value ="No" {{$user->verified == 'No' ? 'selected' : ''}} >No</option>
					            </select>
					          </div> 
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Register Role</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection