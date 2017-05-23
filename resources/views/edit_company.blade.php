<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/poststyle.css">
</head>
<body>
	<h1>Edit Company<a href="{{route('home')}}">Home</a></h1> 

	<form method="POST" action="{{route('update_company', $company->id)}}">
			{{csrf_field()}}
			{{method_field('PUT')}}
		  <div class="form-group">
		    <label for="company">Company Name</label>
		    <input type="text" class="form-control" id="company" name="company" value = "{{$company->company}}">
		  </div>

		  <div class="form-group">
		    <label for="comp_desc">Company Description</label>
		    <input type="text" class="form-control" id="comp_desc" name="comp_desc" value = "{{$company->comp_desc}}">
		  </div>

		  <div class="form-group">
		    <label for="address">Address</label>
		    <input type="text" class="form-control" id="address" name="address" value = "{{$company->address}}">
		  </div>

		  <div class="form-group">
		    <label for="website">Website</label>
		    <input type="text" class="form-control" id="website" name="website" value = "{{$company->website}}">
		  </div>		  

		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Update Company</button>
		  </div>

		
	</form>
</body>
</html>