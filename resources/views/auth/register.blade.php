<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="#">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>Register | SIMLA UCIC</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset ('Assets/css/login_register.css')}}" type="text/css" media="all" /> <!-- Style-CSS --> 
    <!--     Fonts and icons     -->
    <link rel="shortcut icon" href="{{asset('Assets/images/icon.png')}}" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>    
</head>

<body>
    <nav class="navbar navbar-ct-transparent navbar-fixed-top" role="navigation-demo" id="register-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{url("/Assets/images/logo_ucic.png")}}" width="150px" class="navbar">
                </div>
               
            </div>
        </div>
    
      </div><!-- /.container-->
    </nav> 
    
    <div class="wrapper">
        <div class="register-background"> 
            <div class="filter-black"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                            <div class="register-card">
                                <h3 class="title"><b>SIMLA UCIC</b></h3>
                                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{-- {{ csrf_field() }} --}}
                                @csrf
                                <input type="hidden" name="role" value="2">
                                    <label>Name</label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif

                                    <label>E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    

                                    <label>Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    
                                    <input type="submit" class="btn btn-primary btn-block" value="Sign Up" />
                                    
                                </form>
                                <div class="forgot">

                                    <a href="{{ route('login') }}" class="btn btn-simple btn-danger">Already have an account ? Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
            <div class="footer register-footer text-center">
                <h6>&copy; <script>document.write(new Date().getFullYear())</script> | FEBBY AZIS</h6>
            </div>
        </div>
    </div>      

</body>

<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

</html>