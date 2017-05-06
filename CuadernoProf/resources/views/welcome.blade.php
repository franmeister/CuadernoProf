<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cuaderno Profesor</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    @include('includes.styles')

    <style>

        body{
            background-image: none !important;
        }
        .container{
            padding-top: 200px;
            text-align: center;
        }
        .container  img{
            margin-bottom: 50px;
        }

        .panel{
            text-align: left;
        }

    </style>
</head>
<body>
<div class="container">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">
            <img src="{{asset('images/profesor.png')}}">
            <div class="panel panel-default" >
                <div class="panel-body">
                    {{ Form::open(array('url' => 'home', 'method' => 'post'))}}
                        {{--<input name="username" id="username" class="form-control" placeholder="Nombre">--}}
                        {{--<button id="loginButton" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>--}}
                    {{Form::text('username')}}
                    {{Form::submit('Click Me!')}}
                    {{Form::close() }}
                    {{--<form class="form-signin" method="POST" action="{{url('/auth/login')}}">--}}
                        {{--<h2 class="form-signin-heading">Please sign in</h2>--}}
                        {{--<label for="inputEmail" class="sr-only">Nombre</label>--}}
                        {{--<input name="username" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">--}}
                        {{--<label for="inputPassword" class="sr-only">Password</label>--}}
                        {{--<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">--}}
                        {{--<input name="redirect_to" value="/{{session('redirect_to')}}" type="hidden">--}}
                        {{--{{csrf_field()}}--}}
                        {{--<button id="loginButton" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>--}}
                    {{--</form>--}}
                </div>

                {{--@if(session()->has('errors'))--}}
                    {{--<div class="panel-footer alert alert-danger" role="alert">--}}
                        {{--<strong>Error: </strong>{{$errors}}--}}

                    {{--</div>--}}
                {{--@endif--}}
            </div>
        </div>

    </div>


</div>

</div>
</body>
</html>
