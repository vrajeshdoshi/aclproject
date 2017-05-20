<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/poststyle.css">
</head>
<body>
	<h1>Edit Job Post <a href="{{route('home')}}">Home</a></h1> 

	<form method="POST" action="{{route('update_post', [$job->id])}}">
			{{csrf_field()}}
			{{method_field('PUT')}}
		  <div class="form-group">
		  {{$job->category_id}}
		    <label for="name">Job Title</label>
		    <input type="text" class="form-control" id="name" name="name" value = "{{$job->name}}">
		  </div>

		  <div class="form-group">
		    <label for="company">Company</label>
		    <input type="text" class="form-control" id="company" name="company" value = "{{$job->company}}">
		  </div> 

		  <div class="form-group">
		    <label for="description">Description</label>
		    <input type="text" class="form-control" id="description" name="description" value = "{{$job->description}}">
		  </div> 

		  <div class="form-group">
		    <label for="experience">Select Experience</label>
		    <select id = 'experience' class="form-control" name = 'experience'>
		       	<option value ="Fresher" {{$job->experience == 'Fresher' ? 
				       							'selected' : ''}}>Fresher</option>				
		    	<option value ="1-3 years" {{$job->experience == '1-3 years' ? 
				       							'selected' : ''}} >1-3 years</option>
		    	<option value ="3-6 years" {{$job->experience == '3-6 years' ? 
				       							'selected' : ''}} >3-6 years</option>
		    	<option value ="6-9 years" {{$job->experience == '6-9 years' ? 
				       							'selected' : ''}} >6-9 years</option>
		    	<option value ="9-12 years" {{$job->experience == '9-12 years' ? 
				       							'selected' : ''}} >9-12 years</option>
		    	<option value ="more than 12 years" {{$job->experience == 'more than 12 years' ? 
				       							'selected' : ''}} >More than 12 years</option>
		    </select>
		  </div> 

		  <div class="form-group">
		    <label for="jobtype">Job Types</label>
		    <select id = 'jobtype' class="form-control" name = 'jobtype[]' multiple>    

		    @foreach($jobtypes as $jobtype)
		    <?php $flag = '';?>
		    	@foreach($typesselect as $typeselect)
		    		@if($typeselect == $jobtype->name)
		    			<?php $flag = 'selected'; ?>
		    		@endif			
		    	@endforeach
		    	<option {{$flag}} value ={{$jobtype->id}}>{{$jobtype->name}}</option>
			@endforeach
		    </select>
		  </div>  

		  <div class="form-group">
		    <label for="jobcategory">Job Category</label>
		    <select id = 'jobcategory' class="form-control" name = 'jobcategory'>
		    

		    @foreach($jobcategories as $jobcategory)

		    	<option {{$job->category_id == $jobcategory->id ?'selected':''}} value = {{ $jobcategory->id }}>{{$jobcategory->name}}</option>				
			@endforeach
		    </select>
		  </div>  

		  <div class="form-group">
		    <label for="joblocation">Job Locations</label>
		    <select id = 'joblocation' class="form-control" name = 'joblocation[]' multiple>
		    
		    @foreach($joblocations as $joblocation)
		    <?php $flag2 = '';?>
		    	@foreach($locationsselect as $locationselect)
		    		@if($locationselect == $joblocation->name)
		    			<?php $flag2 = 'selected'; ?>
		    		@endif			
		    	@endforeach
		    	<option {{$flag2}} value ={{ $joblocation->id }}>{{$joblocation->name}}</option>
			@endforeach

		    </select>
		  </div>   

		  

		  <div class="form-group">
		    <label for="package">Package</label>
		    <input type="text" class="form-control" id="package" name="package" value = "{{$job->package}}">
		  </div> 

		  <div class="form-group">
		    <label for="verified">Verified</label>
		    <select id = 'verified' class="form-control" name = 'verified'>
		       	<option value ="Yes" {{$job->verified == 'Yes' ? 
				       							'selected' : ''}}>Yes</option>				
		    	<option value ="No" {{$job->verified == 'No' ? 
				       							'selected' : ''}} >No</option>
		    	
		    </select>
		  </div> 

		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Update Job Post</button>
		  </div>

		
	</form>
</body>
</html>