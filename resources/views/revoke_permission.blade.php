@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card ">
                    <div class="header bg-red">
                        <h2 align="center">Revoke Permission From Role</h2>
                    </div>
                    <div class="body table-responsive">
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Roles</th>
                                    <th style="padding-left: 50px;"> Permissions</th>
                                    <!-- <th>Action</th> -->
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
                            @foreach($roles as $role)
                                <tr>
                                    <td>
                                        {{$role['role_name']}}
                                    </td>
                                    <td>
                                    <ol>
                                        @foreach($role['permission'] as $per)
                                         <li>
                                            <span style={width:600px}>
                                            {{$per['name']}}
                                            </span>
                                            <a href="{{route('revoke.permission',['user_id'=>$per['id'], 'role_id'=>$role['role_id']])}}">Revoke</a>
                                         </li>
                                         @endforeach
                                    </ol>
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