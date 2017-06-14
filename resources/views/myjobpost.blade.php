@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card ">
                    <div class="header bg-red">
                        <h2 align="center">My Job Post</h2>
                    </div>
                    <div class="body table-responsive">
                    @foreach($jobs as $job)
                        <table class="table table-hover">
                            <tr>
                                <th>Job Title</th>
                                <td>{{$job['info']->name}}</td>
                            </tr>
                            <tr>
                                <th>Company</th>
                                <td>{{$job['info']->company}}</td>
                            </tr>
                            <tr>
                                <th>Job Description</th>
                                <td>{{$job['info']->description}}</td>
                            </tr>
                            <tr>
                                <th>Job Experience</th>
                                <td>{{$job['info']->experience}}</td>
                            </tr>

                            <tr>
                                <th>Job Type</th>                            
                                <td>
                                @foreach($job['jobtypes'] as $jobtype)
                                {{$jobtype->name}}, 
                                @endforeach
                                </td>
                            </tr>

                            <tr>
                                <th>Job Category</th>
                                <td>{{$job['jobcategory']}}</td>
                            </tr>

                            <tr>
                                <th>Job Locations</th>
                                <td>
                                @foreach($job['joblocations'] as $joblocation)
                                {{$joblocation->name}}, 
                                @endforeach
                                </td>
                            </tr>

                            <tr>
                                <th>Job Package</th>
                                <td>{{$job['info']->package}}</td>
                            </tr>

                            <tr>
                                <th>Verified</th>
                                <td>{{$job['info']->verified}}</td>
                            </tr>                        

                            <tr>
                                <th>Posted On</th>
                                <td>{{$job['info']->created_at}}</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                    <a type="button" class="btn bg-light-blue waves-effect" href="{{ route('edit_post',$job['info']->id) }}"><i class="material-icons">edit</i></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a type="button" class="btn bg-red waves-effect" href="{{ route('delete_jobpost',$job['info']->id) }}"><i class="material-icons">delete</i></a>
                                </td>                 
                            </tr>

                        </table>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection