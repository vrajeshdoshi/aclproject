@extends('layouts.app')

@section('content')
<section class="content">
    <div class="login-page">
        <div class="login-box">
            <div class="card">
                <div class="body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                        <div class="msg"><h3>Login</h3></div>
                        <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Username" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-8 p-t-5">
                                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-red">
                                <label for="rememberme">Remember Me</label>
                            </div>
                            <div class="col-xs-4">
                                <button class="btn btn-block bg-blue waves-effect" type="submit">SIGN IN</button>
                            </div>
                        </div>
                        <div class="row m-t-15 m-b--20">
                            <div class="col-xs-6">
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                            </div>
                            <div class="col-xs-6 align-right">
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
