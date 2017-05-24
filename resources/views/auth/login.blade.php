@extends('layouts.app')

@section('content')
<div class="login-page">
  <div class="login-box">
      <div class="card">
          <div class="body">
              <form id="sign_in" method="POST" role="form" action="{{ route('login') }}">
                  {{ csrf_field() }}
                  <div class="msg">Sign in</div>
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">person</i>
                      </span>

                          <div class="form-line">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required >
                          </div>
                        </div>
                          @if ($errors->has('email'))
                              <span class="help-block" style="red" >
                                  <strong color="red">{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">lock</i>
                      </span>
                          <div class="form-line">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                            </div>
                          </div>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                  </div>
                  <div class="row">
                      <div class="col-xs-8 p-t-5">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>   Remember Me
                        </label>
                      </div>
                      <div class="col-xs-4">
                          <button class="btn btn-block bg-blue waves-effect" type="submit">SIGN IN</button>
                      </div>
                  </div>
                  <div class="row m-t-15 m-b--20">
                      <div class="col-xs-6">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                      </div>

                  </div>
              </form>
          </div>
      </div>
  </div>


</div>
@endsection
