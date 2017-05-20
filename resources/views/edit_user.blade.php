<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/poststyle.css">
</head>
<body>
	<h1>Edit User <a href="{{route('home')}}">Home</a></h1> 

	<form method="POST" action="{{route('update_user', $user->id)}}">
			{{csrf_field()}}
			{{method_field('PUT')}}
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" id="name" name="name" value = "{{$user->name}}">
		  </div>

		  <div class="form-group">
		    <label for="company">Email</label>
		    <input type="text" class="form-control" id="email" name="email" value = "{{$user->email}}">
		  </div> 

		   

		  <div class="form-group">
		    <label for="verified">Verified</label>
		    <select id = 'verified' class="form-control" name = 'verified'>
		       	<option value ="Yes" {{$user->verified == 'Yes' ? 
				       							'selected' : ''}}>Yes</option>				
		    	<option value ="No" {{$user->verified == 'No' ? 
				       							'selected' : ''}} >No</option>
		    	
		    </select>
		  </div> 

		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Update User</button>
		  </div>

		
	</form>
</body>
</html>