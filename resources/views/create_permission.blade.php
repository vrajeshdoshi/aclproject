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

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/all-themes.css" rel="stylesheet" />

    <style type="text/css">
      section.content{margin: 100px auto !important;}
      body{overflow: hidden;}
    </style>
    
</head>

<body class="theme-red">
   

    <section class="content">
      <div class="container">
        <!-- Vertical Layout -->
        <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card card-cust">
              <div class="header">
                <h2>
                 <b>Create Permission <a href="{{route('home')}}">Home</a></b>
                </h2>
              </div>
              <div class="body">
                  <form method="POST" action="{{route('c_p')}}">
                    {{csrf_field()}}
                      <label for="name">Permission Title</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" placeholder = "Create User" id="name" name="name">
                          </div>
                      </div>
                     
                      <label for="slug">Slug</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="slug" placeholder = "controller.method e.g. user.create" name="slug">
                          </div>
                      </div>

                       <label for="description">Description</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="description" name="description">
                          </div>
                      </div>
                      <button type="submit" class="btn btn-primary m-t-15 waves-effect">Create Permission</button>
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

    <!-- Waves Effect Plugin Js -->
    <script src="js/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <!-- <script src="../../js/demo.js"></script> -->
</body>

</html>