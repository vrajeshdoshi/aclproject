@extends('layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
    	<div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card">
                    <div class="header bg-red">
                        <h2 align="center">Create A Role</h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{route('c_r')}}">
                        {{csrf_field()}}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="name" name="name">
                                    <label class="form-label">Name</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea rows="1" class="form-control no-resize" id="description" name="description"></textarea>
                                    <label class="form-label">Description</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Create Role</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection