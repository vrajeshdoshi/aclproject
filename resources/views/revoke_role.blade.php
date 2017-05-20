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
	<h1>Revoke Role From User <a href="{{route('home')}}">Home</a></h1> 


	<form method="POST" action="/revoke_role">
			{{csrf_field()}}
	<div class="form-group">
		 <table class="table">
    <thead>

      <tr>
        <th>Users</th>
        <th style="padding-left: 50px">Roles</th>
       {{-- <th>Revoke Role</th>        --}}
      </tr>
    </thead>
    <tbody>
    	@foreach($users as $user)
    	<tr>
    		<td>
    			{{$user['user_name']}}
    		</td>
    		<td>
    			<ol style="list-style-type:none;">
    				@foreach($user['role'] as $rol)
    				
    			
    				 <li>
    				 	
    				 	<span style={width:600px}>
    				 	{{$rol['name']}}
    				 	</span>
    				 	<a href="/revoke_role/{{$rol['id']}}/{{$user['user_id']}}">Revoke</a>
    				 {{--	<a href="/revoke_role/{{$rol['id']}}/{{$user['user_id']}}" class="btn btn-success btn-xs ">&nbsp;X&nbsp;</a>--}}
    				 	
    				 </li>
    				 
    				 @endforeach
    			</ol>
    		 </td>

    		 {{--<td>
    		     		     		 <ol style= "list-style-type:none;">
    		     		     				@foreach($user['role'] as $rol)
    		     		     				
    		     		     			
    		     		     				 <li>
    		     		     				 	    				 	
    		     		     				 	<a href="/revoke_role/{{$rol['id']}}/{{$user['user_id']}}">Revoke</a>
    		     		     				 	
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
    </tbody>
  </table>
	</div>	  		
		  <!-- <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Revoke Role</button>
		  </div> -->

		
	</form>
</body>
</html>