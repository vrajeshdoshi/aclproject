<h2>
Hello {{$user}}! Your account has been created Job Portal.
Your Login credentials are:<br>
Email: {{$email}} <br>
One Time Password: {{$password}}<br>
Please <a href="{{route('verify_staff', ['token'=>$token, 'id'=>$tokenid])}}">Click Here</a> to activate your Account and Reset Your password. You will be soon assigned your role.
</h2>