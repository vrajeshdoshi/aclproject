<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/poststyle.css">
    <style>
        .btn{
            width:15px;
            height:20px;
            background-color: red;
            padding:10px;
        }
    </style>
</head>
<body>
    <h1>Users <a href="{{route('home')}}">Home</a></h1> 


    <form method="POST" action="/revoke_role">
            {{csrf_field()}}
    <div class="form-group">
         <table class="table">
    <thead>

      <tr>
        <th>Users</th>
        <th style="padding-left: 50px">Roles</th>
        <th>Email</th>
        <th>Manage Users</th>
       {{-- <th>Revoke Role</th>        --}}
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>
                {{$user['user_name']}}
@if(count($user['company']) > 0)
        <a href="{{ route('display_company',$user['user_id']) }}">Company</a>                
@endif
            </td>
            <td>
                <ol style="list-style-type:none;">
                    @foreach($user['role'] as $rol)
                    
                
                     <li>
                        
                        <span style={width:600px}>
                        {{$rol['name']}}
                        </span>                      
                    
                        
                     </li>
                     
                     @endforeach
                </ol>
             </td>
             <td>
                {{$user['user_email']}}
             </td>
             <td>
             <a href="{{route('edit_user', $user['user_id'])}}">Edit</a>
             <a href="{{route('delete_user', $user['user_id'])}}">Delete</a>
             </td>
   
    </tr>
    @endforeach        
    </tbody>
  </table>
    </div>          
          <!-- <div class="form-group">
            <button type="submit" class="btn btn-primary">Revoke Role</button>
          </div> -->

        
    </form>
</body>
</html>