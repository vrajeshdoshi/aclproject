<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/all-themes.css') }}" rel="stylesheet">
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/waves.css') }}" rel="stylesheet">
	<link href="{{ asset('css/waitMe.css') }}" rel="stylesheet">
	<link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
	<style>
	.cust{
    margin: 0 auto;}
	</style>
</head>
<body>
	<h1><a href="{{route('home')}}">Home</a></h1>

	<div class="content">
			<div class="container-fluid">
					<div class="row clearfix">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 cust">
									<div class="card ">
											<div class="header">
													<h2>Create A Role</h2>
											</div>
											<div class="body">
													<form method="POST" action="/create_role">
															{{csrf_field()}}

															<div class="form-group form-float">
																	<div class="form-line">
																		{{-- <label class="form-label">User Role</label> --}}
																			<input type="text" class="form-control" placeholder="User Role" id="name" name="name">
																			{{-- <label class="form-label">User Role</label> --}}
																	</div>
															</div>

															<div class="form-group form-float">
																	<div class="form-line">
																			<input type="text" class="form-control" placeholder="Description" id="description" name="description">
																			{{-- <label class="form-label">Description</label> --}}
																	</div>
															</div>
															<button  type="submit" class="btn btn-primary m-t-15 waves-effect ">Create Role</button>
													</form>
											</div>
									</div>
							</div>
					</div>
				</div>
			</div>
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>

	<script src="{{ asset('js/admin.js') }}"></script>
	<script src="{{ asset('js/bootstrap-select.js') }}"></script>
	<script src="{{ asset('js/Bootstrap.js') }}"></script>
	<script src="{{ asset('js/demo.js') }}"></script>
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/jquery-slimscroll.js') }}"></script>
	<script src="{{ asset('js/waves.js') }}"></script>
	<script src="{{ asset('js/jquery.validate.js') }}"></script>
	<script src="{{ asset('js/sign-in.js') }}"></script>
	<script src="{{ asset('js/colored.js') }}"></script>
	<script src="{{ asset('js/waitMe.js') }}"></script>
</body>
</html>
