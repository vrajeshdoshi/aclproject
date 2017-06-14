@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card">
                    <div class="header">
                        <h2 align="center">Edit Category</h2>
                    </div>
                    <div class="body">
                        <form  role="form" method="POST" action="{{route('update_category', $category->id)}}">
                        {{csrf_field()}}
            			{{method_field('PUT')}}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Category Name</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="text" class="form-control" id="name" name="name" value = "{{$category->name}}" required>
                                      @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                  </div>
                              </div>
                          </div>
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                              <label for="description">Description</label>
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="text" class="form-control" id="description" name="description" value = "{{$category->description}}" required >
                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                  </div>
                              </div>
                          </div>

                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection