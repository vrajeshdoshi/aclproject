@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card">
                    <div class="header">
                        <h2 align="center">Edit Location</h2>
                    </div>
                    <div class="body">
                        <form  role="form" method="POST" action="{{route('update_location', $location->id)}}">
                       	{{csrf_field()}}
            			{{method_field('PUT')}}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Job City</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="text" class="form-control" id="name" name="name" value = "{{$location->name}}" required>
                                      @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                  </div>
                              </div>
                          </div>
                          <div>
                          	<label for="name">Job Country</label>
                            <div class="form-group">
                                  <div class="form-line">
                                      <input type="text" class="form-control" id="description" name="description" value = "{{$location->description}}" required>
                                  </div>
                              </div>
                              </div>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect"> Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection