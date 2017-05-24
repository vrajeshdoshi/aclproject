<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/poststyle.css">
</head>
<body>
	<h1>Assign Role to User <a href="{{route('home')}}">Home</a></h1> 


<!-- <ul>
<?php foreach($userData as $user):?>
	<li><?= $user->id.' '.$user->name; ?></li>
<?php endforeach; ?>
</ul>

<ul>
<?php foreach($roleData as $role):?>
	<li><?= $role->id.' '.$role->name; ?></li>
<?php endforeach; ?>
</ul> -->


	<form method="POST" action="{{route('a_r')}}">
			{{csrf_field()}}
		  <div class="form-group">
		    <label for="user_id">Select User</label>
		    <select id = 'user_id' class="form-control" name = 'user_id'>
		    

		    @foreach($userData as $user)
		    	<option value = {{ $user->id }}>{{$user->name}}</option>				
			@endforeach
		    </select>
		  </div>  

		  <div class="form-group">
		    <label for="role_id">Select Role</label>
		    <select id = 'role_id' class="form-control" name = 'role_id[]' multiple>
		    

		    @foreach($roleData as $role)
		    	<option value = {{ $role->id }}>{{$role->name}}</option>				
			@endforeach
		    </select>
		  </div>  
		  		
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Assign Role</button>
		  </div>

		
	</form>
</body>
</html>