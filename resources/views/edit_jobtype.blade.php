<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/poststyle.css">
</head>
<body>
	<h1>Edit Job Type <a href="{{route('home')}}">Home</a></h1> 

	<form method="POST" action="{{route('update_jobtype', $jobtype->id)}}">
			{{csrf_field()}}
			{{method_field('PUT')}}
		  <div class="form-group">
		    <label for="name">Job Type</label>
		    <input type="text" class="form-control" id="name" name="name" value = "{{$jobtype->name}}">
		  </div>

		  <div class="form-group">
		    <label for="description">Description</label>
		    <input type="text" class="form-control" id="description" name="description" value = "{{$jobtype->description}}">
		  </div> 

		  
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Update Job Type</button>
		  </div>

		
	</form>
</body>
</html>