@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card ">
                    <div class="header bg-red">
                        <h2 align="center">Job Type's</h2>
                    </div>
                    <div class="body table-responsive">
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                <th>Job Type Title</th>
                                <th>Description</th>
                                <th>Manage Job Types</th>        
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobtypes as $jobtype)
                                <tr>
                                    <td>
                                        {{$jobtype['name']}}
                                    </td>
                                    <td>
                                       {{$jobtype['description']}}
                                    </td>
                                    <td>
                                        <a type="button" class="btn bg-light-blue waves-effect" href="{{route('edit_jobtype', $jobtype['id'])}}"><i class="material-icons">edit</i></a> &nbsp;&nbsp;&nbsp;&nbsp; 
                                        <a type="button" class="btn bg-red waves-effect" href="{{route('delete_jobtype', $jobtype['id'])}}"><i class="material-icons">delete</i></a>
                                        
                                    </td>
                                </tr>
                            @endforeach        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection