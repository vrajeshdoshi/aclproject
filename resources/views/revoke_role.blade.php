@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card ">
                    <div class="header bg-red">
                        <h2 align="center">Revoke Role From User</h2>
                    </div>
                    <div class="body table-responsive">
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>USER</th>
                                    <th>ROLE</th>
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
                                    @foreach($user['role'] as $rol)
                                    <td>
                                        {{$rol['name']}}
                                    </td>
                                    <td>
                                        <a href="{{route('revoke.role',['user_id'=>$rol['id'], 'role_id'=>$user['user_id']])}}">Revoke</a>
                                    </td>
                                    @endforeach
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