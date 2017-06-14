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
        <h1>Revoke Permission From Role <a href="{{route('home')}}">Home</a></h1> --}}
        <!-- <div class="container-fluid"> -->
        <!-- <div class="row clearfix"> -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 cust">
            <div class="card">
                <div class="header">
                    <h2>Revoke Permission From Role <a href="{{route('home')}}">Home</a></h2>
                </div>
                <div class="body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Roles</th>
                                <th style="padding-left: 300px">Permissions</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($roles as $role)
        <tr>
            <td>
                {{$role['role_name']}}
            </td>
            <td style="padding-left: 230px">
                <ol>
                    @foreach($role['permission'] as $per)
                    
                
                     <li>
                        
                        <span style={width:600px}>
                        {{$per['name']}}
                        </span>
                        
                        
                        &nbsp;&nbsp;&nbsp;<a href="{{route('revoke.permission',['user_id'=>$per['id'], 'role_id'=>$role['role_id']])}}">Revoke</a>
                        
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
        <!-- </div> -->
        <!-- </div> -->
    </div>

</body>

</html>