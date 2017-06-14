@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card">
                    <div class="header bg-red">
                <h2 style="text-align: center;">
                    <b>Create Permission</b>
                </h2>
              </div>
              <div class="body">
                  <form method="POST" action="{{route('c_p')}}">
                    {{csrf_field()}}
                      <label for="name">Permission Title</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" placeholder = "Create User" id="name" name="name">
                          </div>
                      </div>
                     
                      <label for="slug">Slug</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="slug" placeholder = "controller.method e.g. user.create" name="slug">
                          </div>
                      </div>

                       <label for="description">Description</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="description" name="description">
                          </div>
                      </div>
                      <button type="submit" class="btn btn-primary m-t-15 waves-effect">Create Permission</button>
                  </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
@endsection