@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card">
                    <div class="header bg-red">
                        <h2 align="center">Create New User</h2>
                    </div>
                    <div class="body">
                        <form  role="form" method="POST" action="{{ route('create_user_store') }}">
                        {{csrf_field()}}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Name</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                      @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                  </div>
                              </div>
                          </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email">E-Mail Address</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                      @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                  </div>
                              </div>
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