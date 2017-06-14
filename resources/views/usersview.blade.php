<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Revoke Role</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="css/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/all-themes.css" rel="stylesheet" />
    <style>
        .cust {
            margin-top: 100px;
            margin-left: 310px;
        }
    </style>
</head>

<body class="theme-red">
    <div class="content">
        {{--
        <h1>Revoke Role From User <a href="{{route('home')}}">Home</a></h1> --}}
        <!-- <div class="container-fluid"> -->
        <!-- <div class="row clearfix"> -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 cust">
            <div class="card">
                <div class="header">
                    <h2>Users <a href="{{route('home')}}">Home</a></h2>
                </div>
                <div class="body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Company</th>
                                <th style="padding-left: 50px">Roles</th>
                                <th>Email</th>
                                <th>Manage Users</th>                                
                            </tr>
                        </thead>
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
             <a href="{{route('edit_user', $user['user_id'])}}">Edit</a> &nbsp;&nbsp; | &nbsp;&nbsp;  
             <a href="{{route('delete_user', $user['user_id'])}}">Delete</a>
             </td>
@endif   
    </tr>
    @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <!-- </div> -->
    </div>

</body>

</html>