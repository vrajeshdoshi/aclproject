@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
                <div class="card ">
                    <div class="header bg-red">
                        <h2 align="center">User List</h2>
                    </div>
                    <div class="body table-responsive">
                            <table class="table table-hover">
                            <thead>
                                <thead>
                            <tr>
                                <th>User</th>
                                <th>Company</th>
                                <th style="padding-left: 50px">Roles</th>
                                <th>Email</th>
                                <th>Action</th>                                
                            </tr>
                            </thead>
                            <!-- <tfoot>
                                <tr>
                                    <th>USER</th>
                                    <th>ROLE</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot> -->
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        {{$user['user_name']}}
                                    </td>
                                    <td>
                                @if(count($user['company']) > 0)
                                    <a href="{{ route('display_company',$user['user_id']) }}">Company</a>
                                @endif
                                    </td>
                                    <td>
                                        <ol style="list-style-type:none;">
                                            @foreach($user['role'] as $rol)
                                             <li>
                                                <span style={width:600px}>
                                                {{$rol['name']}}
                                                </span>                      
                                             </li>
                                             @endforeach
                                        </ol>
                                     </td>
                                     <td>
                                        {{$user['user_email']}}
                                     </td>
                                @ifUserCan('user.delete')
                                     <td>
                                        <a type="button" class="btn bg-light-blue waves-effect" href="{{route('edit_user', $user['user_id'])}}"><i class="material-icons">edit</i></a> &nbsp;&nbsp;&nbsp;&nbsp; 
                                        <a type="button" class="btn bg-red waves-effect" href="{{route('delete_user', $user['user_id'])}}"><i class="material-icons">delete</i></a>
                                     </td>
                                @endif   
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