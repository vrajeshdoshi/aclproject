<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Job Locations</title>
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
                    <h2>Job Locations <a href="{{route('home')}}">Home</a></h2>
                </div>
                <div class="body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Job City</th>
                                <th>Job Country</th>
                                <th>Manage Locations</th>        
                            </tr>
                        </thead>
                        <tbody>
               @foreach($locations as $location)
        <tr>
            <td>
                {{$location['name']}}
            </td>
            <td>
               {{$location['description']}}
             </td>
            
             <td>
             <a href="{{route('edit_location', $location['id'])}}">Edit</a>&nbsp;&nbsp; | &nbsp;&nbsp;
             <a href="{{route('delete_location', $location['id'])}}">Delete</a>
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