<<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'job portal') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <link href="{{ asset('css/waves.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-select.css') }}" rel="stylesheet">

    <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/all-themes.css') }}" rel="stylesheet">

    <!-- <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet"> -->


    <!-- Scripts -->

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <style type="text/css">
        .btn-cus{
    margin-left: 5px;
    margin-bottom: 8px;
  }
    </style>
</head>
<body class="theme-red">
    
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                <div class="card">
              <div class="header bg-red">
                <h2 align="center">
                 Caution !!!!
                </h2>
              </div>
              <div class="body">
              <p style="text-align: center;">Your token is invalid or expired. Please contact System Administrator.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- #END# Vertical Layout -->
      </div>
    </section>


    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <script src="{{ asset('js/bootstrap-select.js') }}"></script>

    <script src="{{ asset('js/waves.js') }}"></script>

    <script src="{{ asset('js/jquery.validate.js') }}"></script>


    <!-- <script src="{{ asset('js/jquery.slimscroll.js') }}"></script> -->

    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>

    <!-- <script src="{{ asset('js/dataTables.bootstrap.js') }}"></script> -->

    <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>

    <script src="{{ asset('js/buttons.flash.min.js') }}"></script>

    <script src="{{ asset('js/jszip.min.js') }}"></script>

    <script src="{{ asset('js/pdfmake.min.js') }}"></script>

    <script src="{{ asset('js/vfs_fonts.js') }}"></script>

    <script src="{{ asset('js/buttons.html5.min.js') }}"></script>

    <script src="{{ asset('js/buttons.print.min.js') }}"></script>

    <script src="{{ asset('js/admin.js') }}"></script>

    <script src="{{ asset('js/jquery-datatable.js') }}"></script>

    <script src="{{ asset('js/demo.js') }}"></script>

    <script src="{{ asset('js/sign-in.js') }}"></script>

    <script src="{{ asset('js/sign-up.js') }}"></script>

</body>
</html>
