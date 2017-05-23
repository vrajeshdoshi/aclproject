<h1>
Hello {{$user}}! Thank you for registering with us. Please <a href="{{route('verify_user', ['token'=>$token, 'id'=>$tokenid])}}">Click Here</a> to activate your Account.
</h1>