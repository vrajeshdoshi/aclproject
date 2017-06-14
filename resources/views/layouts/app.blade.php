<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/home">ACL Project</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
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
