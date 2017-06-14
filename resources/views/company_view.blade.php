@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card ">
                    <div class="header bg-red">
                        <h2 align="center">Company Details</h2>
                    </div>
                    <div class="body table-responsive">
                    
                        <table class="table table-hover">
                            <tr>
                                <th>Company Name</th>
                                <td>{{$companies['company']->company}}</td>
                            </tr>

                            <tr>
                                <th>Company Personel</th>
                                <td>{{$companies['company']->user->name}}</td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td>{{$companies['company']->user->email}}</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>{{$companies['company']->address}}</td>
                            </tr>

                             <tr>
                              <th>Website</th>
                              @if($companies['company']->website != null)
                              <td>{{$companies['company']->website}}</td>
                              @else
                              <td>Not Specified</td>
                              @endif
                            </tr>

                            <tr>
                              <th>Description</th>
                              <td>{{$companies['company']->comp_desc}}</td>
                            </tr>
                                <td></td>
                                <td>
                                    <a type="button" class="btn bg-light-blue waves-effect" href="{{route('edit_company', $companies['company']->id)}}"><i class="material-icons">edit</i></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a type="button" class="btn bg-red waves-effect" href="{{route('delete_company', $companies['company']->id)}}"><i class="material-icons">delete</i></a>
                                </td>                 
                            </tr>

                        </table>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection