<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ URL::asset('css/metisMenu.min.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ URL::asset('css/startmin.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<form action="{{ url('login') }}" method="POST" role="form">
						<legend>Login</legend>
                        @if($errors->has('errorlogin'))
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{$errors->first('errorlogin')}}
                            </div>
                        @endif
						<div class="form-group">
							<label for="">Email</label>
							<input type="text" class="form-control" id="email" placeholder="E-mail" name="email" value="{{ old('email') }}">
							@if($errors->has('email'))
								<p style="color:red">{{ $errors->first('email') }}</p>
							@endif
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password" name="password">
							@if($errors->has('password'))
								<p style="color:red">{{ $errors->first('password') }}</p>
							@endif
						</div>
					
						
						{!! csrf_field() !!}
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
			</div>
		</div>

        <!-- jQuery -->
        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ URL::asset('js/metisMenu.min.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ URL::asset('js/startmin.js') }}"></script>









		
    </body>
</html>
