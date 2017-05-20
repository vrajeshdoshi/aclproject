<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/poststyle.css">
</head>
<body>
	<h1>Create A Job <a href="{{route('home')}}">Home</a></h1> 

	<form method="POST" action="{{route('create_post_store')}}">
			{{csrf_field()}}
		  <div class="form-group">
		    <label for="name">Job Title</label>
		    <input type="text" class="form-control" id="name" name="name">
		  </div>  

		  <div class="form-group">
		    <label for="company">Company</label>
		    <input type="text" class="form-control" id="company" name="company">
		  </div> 

		  <div class="form-group">
		    <label for="description">Description</label>
		    <input type="text" class="form-control" id="description" name="description">
		  </div> 

		  <div class="form-group">
		    <label for="experience">Select Experience</label>
		    <select id = 'experience' class="form-control" name = 'experience'>
		    	<option value ="Fresher">Fresher</option>				
		    	<option value ="1-3 years">1-3 years</option>
		    	<option value ="3-6 years">3-6 years</option>
		    	<option value ="6-9 years">6-9 years</option>
		    	<option value ="9-12 years">9-12 years</option>
		    	<option value ="more than 12 years">More than 12 years</option>
		    </select>
		  </div>

		  <div class="form-group">
		    <label for="jobtype">Job Types</label>
		    <select id = 'jobtype' class="form-control" name = 'jobtype[]' multiple>
		    

		    @foreach($jobtypes as $jobtype)
		    	<option value = {{ $jobtype->id }}>{{$jobtype->name}}</option>				
			@endforeach
		    </select>
		  </div>  

		  <div class="form-group">
		    <label for="jobcategory">Job Category</label>
		    <select id = 'jobcategory' class="form-control" name = 'jobcategory'>
		    

		    @foreach($jobcategories as $jobcategory)
		    	<option value = {{ $jobcategory->id }}>{{$jobcategory->name}}</option>				
			@endforeach
		    </select>
		  </div>  

		  <div class="form-group">
		    <label for="joblocation">Job Locations</label>
		    <select id = 'joblocation' class="form-control" name = 'joblocation[]' multiple>
		    

		    @foreach($joblocations as $joblocation)
		    	<option value = {{ $joblocation->id }}>{{$joblocation->name}}</option>				
			@endforeach
		    </select>
		  </div>   

		  <div class="form-group">
		    <label for="package">Package</label>
		    <input type="text" class="form-control" id="package" name="package">
		  </div> 		
		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Create Job</button>
		  </div>

		
	</form>
</body>
</html>