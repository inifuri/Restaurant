<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Como en Casa</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Login del Sistema de Gestión Restaurante Como en Casa" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
        <!--header-->
        <div class="header-w3l">
            <h1>Como en Casa</h1>
        </div>
        <!--//header-->
        <!--main-->
        <div class="main-w3layouts-agileinfo">
               <!--form-stars-here-->
                <div class="wthree-form">
                    <h2>Inciar sesión</h2>


                    <form class="form-horizontal" method="POST" action="{{ route('log.store') }}">
                        {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <div class="form-sub-w3">
                                    <input id="username" type="text" name="username" placeholder="Usuario " value="{{ old('username') }}" required autofocus>
                                    <div class="icon-w3">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="form-sub-w3">
                                    <input id="password" type="password" name="password" placeholder="Contraseña" required>
                                    <div class="icon-w3">
                                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            </div>
                           @if($errors->any())
                                <label class="anim">
                                    <span>{{ $errors->first() }}</span>
                                </label>
                            @endif

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <label class="anim">
                                    <div class="checkbox">
                                            <input type="checkbox" class="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span>Recordarme!</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                           <div class="submit-agileits">
                                    <input type="submit" value="Ingresar al sistema">
                           </div>
                    </form>
                <!--//form-ends-here-->

                </div>
        </div>
        <!--//main-->
        <!--footer-->
        <div class="footer">
            <p>&copy; 2017 Glassy Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
        <!--//footer-->
</body>
</html>
