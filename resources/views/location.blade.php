@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card">
                    <div class="header bg-red">
                        <h2 align="center">Create New Location</h2>
                    </div>
                    <div class="body">
                        <form  role="form" method="POST" action="{{ route('create_location_store') }}">
                        {{csrf_field()}}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Job City</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                      @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                  </div>
                              </div>
                          </div>
                            <div>
                                <label for="description">Select Country</label>
                                <select id = 'description' name = 'description' class="form-control show-tick" data-live-search="true" >
                                    <option value = "India">India</option>
                                    <option value = "China">China</option>
                                    <option value = "USA">USA</option>             
                                    <option value = "Germany">Germany</option>  
                                    <option value = "Australia">Australia</option>
                                </select>
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