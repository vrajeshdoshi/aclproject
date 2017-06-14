@extends('layouts.app')

@section('content')
 <section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card">
              <div class="header bg-red">
                <h2 align="center">
                 Edit Company
                </h2>
              </div>
              <div class="body">
                <form method="POST" action="{{route('update_company', $company->id)}}">
                  	{{csrf_field()}}
            		{{method_field('PUT')}}
                  	  <label for="company">Company Name</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="company" name="company" value = "{{$company->company}}">                              
                          </div>
                      </div>
                     
                      <label for="comp_desc">Company Description</label>
                      <div class="form-group">
                          <div class="form-line">
        					<input type="text" class="form-control" id="comp_desc" name="comp_desc" value = "{{$company->comp_desc}}">
                          </div>
                      </div>

                      <label for="address">Address</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="address" name="address" value = "{{$company->address}}">
                          </div>
                      </div>
                      
                      <label for="website">Website</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="website" name="website" value = "{{$company->website}}">
                          </div>
                      </div>
					    
                       <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update Company</button>                  
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- #END# Vertical Layout -->
      </div>
    </section>
@endsection