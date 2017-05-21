@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Job Posts <a href="{{route('home')}}">Home</a></div>

                <div class="panel-body">

                    @foreach($jobs as $job)
                    <table>
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

                            <td><a href="{{ route('edit_post',$job['info']->id) }}">Edit</a></td>
                            <td><a href="{{ route('delete_jobpost',$job['info']->id) }}">Delete</a></td>                            
                        </tr>

                    </table>
                    <br>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection