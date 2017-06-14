@extends('layouts.app')

@section('content')
<section class="content">
    <div class="signup-page">
        <div class="signup-box">
            <div class="card">
                <div class="body">
                    <form class="form-horizontal" role="form" method="POST" action="{{  route('register') }}">
                    {{ csrf_field() }}
                        <div class="msg">Register a new membership</div>
                        <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <div class="form-line">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Email Address" required>
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
                                    <input id="password" type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" minlength="6" placeholder="Confirm Password" required>
                            </div>
                        </div>

                        <div class="input-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label>I Want To Register As</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <select id = 'role_id' class="form-control show-tick" name = 'role_id'>   
                                        <option value = 4>Job Seeker</option>                
                                        <option value = 5>Job Provider</option>                
                                    </select>
                                </div>
                                @if ($errors->has('role_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">REGISTER</button>

                        <!-- <div class="m-t-25 m-b--5 align-center">
                            <a href="sign-in.html">You already have a membership?</a>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
