<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Form Examples | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="css/bootstrap-select.css" rel="stylesheet" />

    <!-- Multi Select Css -->
    <link href="css/multi-select.css" rel="stylesheet">

    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/all-themes.css" rel="stylesheet" />

    <style type="text/css">
        section.content {
            margin: 100px auto !important;
        }
    </style>

</head>

<body class="theme-red">

    <section style="display: none;">
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">

            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container">
            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card card-cust">
                        <div class="header">
                            <h2>
                 <b>Create a Job <a href="{{route('home')}}">Home</a></b>
                </h2>
                        </div>
                        <div class="body">
                            <form method="POST" action="{{route('create_post_store')}}">
                                {{csrf_field()}}
                                <label for="name">Job Title</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>

                                <label for="company">Company</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="company" name="company">
                                    </div>
                                </div>

                                <label for="description">Description</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="description" name="description">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="experience">Select Experience</label>
                                    <select id='experience' class="form-control selectpicker" name='experience'>
                                        <option value="Fresher">Fresher</option>
                                        <option value="1-3 years">1-3 years</option>
                                        <option value="3-6 years">3-6 years</option>
                                        <option value="6-9 years">6-9 years</option>
                                        <option value="9-12 years">9-12 years</option>
                                        <option value="more than 12 years">More than 12 years</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jobtype">Job Types</label>
                                    <select id='jobtype' class="form-control show-tick" name='jobtype[]' multiple>
                                        @foreach($jobtypes as $jobtype)
                                        <option value={ { $jobtype->id }}>{{$jobtype->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jobcategory">Job category</label>
                                    <select id='jobcategory' class="form-control selectpicker" name='jobcategory'>
                                        @foreach($jobcategories as $jobcategory)
                                        <option value={ { $jobcategory->id }}>{{$jobcategory->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="joblocation">Job Locations</label>
                                    <select id='joblocation' class="form-control show-tick" name='joblocation[]' multiple>
                                        @foreach($joblocations as $joblocation)
                                        <option value={ { $joblocation->id }}>{{$joblocation->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <label for="package">Package</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="package" name="package">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Create Job</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="js/bootstrap-select.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="js/jquery.multi-select.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="js/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <!-- <script src="../../js/demo.js"></script> -->
</body>

</html>