<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/poststyle.css">
</head>
<body>
	<h1>Revoke Permission From Role <a href="{{route('home')}}">Home</a></h1> 


	<form method="POST" action="/revoke_permission">
			{{csrf_field()}}
	<div class="form-group">
		 <table class="table">
    <thead>

      <tr>
        <th>Roles</th>
        <th style="padding-left: 50px">Permissions</th>
        {{--<th>Revoke Permission</th>        --}}
      </tr>
    </thead>
    <tbody>
    		@foreach($roles as $role)
    	<tr>
    		<td>
    			{{$role['role_name']}}
    		</td>
    		<td>
    			<ol>
    				@foreach($role['permission'] as $per)
    				
    			
    				 <li>
    				 	
    				 	<span style={width:600px}>
    				 	{{$per['name']}}
    				 	</span>
						
						
    				 	<a href="{{route('revoke.permission',['user_id'=>$per['id'], 'role_id'=>$role['role_id']])}}">Revoke</a>
    				 	
    				 </li>
    				 
    				 @endforeach
    			</ol>
    		 </td>

    		{{-- <td>
    		 <ol style= "list-style-type:none;">
    				@foreach($role['permission'] as $rol)
    				
    			
    				 <li>
    				 	    				 	
    				 	<a href="/revoke_permission/{{$per['id']}}/{{$role['role_id']}}">Revoke</a>
    				 	
    				 </li>
    				 
    				 @endforeach
    			</ol>
    		 </td>--}}
   {{-- @foreach($users as $user)  
    <tr>
    <td>{{$user['email']}}</td>
	<td>{{$user['role']}}</td>
	<td><a href="/revoke_role/{{$user['id']}}/{{$user['userId']}}" class="btn btn-success btn-xs">&nbsp;Delete&nbsp;</a></td>
	</tr>    	
	@endforeach --}} 
	</tr>
	@endforeach

    {{--@foreach($roles as $role)  
                      <tr>
                      <td>{{$role['name']}}</td>
                  	<td>{{$role['permission']}}</td>
                  	<td><a href="/revoke_permission/{{$role['id']}}/{{$role['roleId']}}" class="btn btn-success btn-xs ">&nbsp;Delete&nbsp;</a></td>
                  	</tr>    	
                  	@endforeach --}}          
    </tbody>
  </table>
	</div>	  		
		  <!-- <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Revoke Role</button>
		  </div> -->

		
	</form>
</body>
</html>