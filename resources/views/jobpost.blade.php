@extends('layouts.app')

@section('content')
 <section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card">
              <div class="header bg-red">
                <h2 align="center">Create a Job </h2>
              </div>
              <div class="body">
                <form method="POST" action="{{route('create_post_store')}}">
                  {{csrf_field()}}
                  <label for="name">Job Title</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="name" name="name">                              
                          </div>
                      </div>
                     
                      <label for="company">Company</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="company" name="company">
                          </div>
                      </div>

                      <label for="description">Description</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="description" name="description">
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="experience">Select Experience</label>
                          <select id = 'experience' class="form-control show-tick" name = 'experience'>
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
                          <select id = 'jobtype' class="form-control show-tick" name = 'jobtype[]' multiple>
                               @foreach($jobtypes as $jobtype)
                                <option value = {{ $jobtype->id }}>{{$jobtype->name}}</option>        
                               @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="jobcategory">Job category</label>
                          <select id = 'jobcategory' class="form-control selectpicker" name = 'jobcategory'>
                             @foreach($jobcategories as $jobcategory)
                              <option value = {{ $jobcategory->id }}>{{$jobcategory->name}}</option>        
                             @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="joblocation">Job Locations</label>
                          <select id = 'joblocation' class="form-control show-tick" name = 'joblocation[]' multiple>
                            @foreach($joblocations as $joblocation)
                              <option value = {{ $joblocation->id }}>{{$joblocation->name}}</option>
                          @endforeach
                        </select>
                        </div>

                        <label for="package">Package</label>
                          <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="package" name="package">
                          </div>
                      </div>
                       <button type="submit" class="btn btn-primary m-t-15 waves-effect">Create Job</button>                  
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- #END# Vertical Layout -->
      </div>
    </section>
@endsection