@extends('layouts.app')

@section('content')
 <section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card">
              <div class="header bg-red">
                <h2 align="center">
                 Edit Job Post
                </h2>
              </div>
              <div class="body">
                <form method="POST" action="{{route('update_post', [$job->id])}}">
                  	{{csrf_field()}}
            		{{method_field('PUT')}}
                  <label for="name">Job Title</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="name" name="name" value = "{{$job->name}}">                              
                          </div>
                      </div>
                     
                      <label for="company">Company</label>
                      <div class="form-group">
                          <div class="form-line">
            				<input type="text" class="form-control" id="company" name="company" value = "{{$job->company}}">
                          </div>
                      </div>

                      <label for="description">Description</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="description" name="description" value = "{{$job->description}}">
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="experience">Select Experience</label>
                          <select id = 'experience' class="form-control selectpicker" name = 'experience'>
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
				                <option value ="more than 12 years" {{$job->experience == 'more than 12 years' ? 'selected' : ''}} >More than 12 years</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="jobtype">Job Types</label>
                          <select id = 'jobtype' class="form-control show-tick" name = 'jobtype[]' multiple>
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
                          <label for="jobcategory">Job category</label>
                          <select id = 'jobcategory' class="form-control selectpicker" name = 'jobcategory'>
                            @foreach($jobcategories as $jobcategory)
                				<option {{$job->category_id == $jobcategory->id ?'selected':''}} value = {{ $jobcategory->id }}>{{$jobcategory->name}}</option>
            				@endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="joblocation">Job Locations</label>
                          <select id = 'joblocation' class="form-control show-tick" name = 'joblocation[]' multiple>
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

                        <label for="package">Package</label>
                          <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="package" name="package" value = "{{$job->package}}">
                          </div>
                      </div>

                     @ifUserCan('alljobpost.edit')
					    <div class="form-group">
					        <label for="verified">Verified</label>
					        <select id = 'jobcategory' class="form-control selectpicker" name = 'verified'>
					        	<option value ="Yes" {{$job->verified == 'Yes' ? 'selected' : ''}}>Yes</option>              
					        	<option value ="No" {{$job->verified == 'No' ? 'selected' : ''}} >No</option>
					        </select>
					    </div> 
					@endif
                       <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update Job Post</button>                  
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- #END# Vertical Layout -->
      </div>
    </section>
@endsection