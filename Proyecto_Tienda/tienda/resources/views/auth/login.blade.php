<!DOCTYPE html>
<html>
<head>
    <title>Inicio de sesión</title>

    <link href="css/estilo_login.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://localhost/tienda/public/css/estilo_login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>  
    <div class="container" style="margin-top:5%;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="bt-login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3>Acceso al sistema</h3>
                    </div>
                    <div class="panel-body">      
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong></strong> Vuelve a ingresar tus datos.<br><br>
                        </div>
                    @endif                  
                        <form role="form" role="form" method="POST" action="{{ url('/auth/login') }}">  
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">                    
                            <div class="form-group">
                                <h4>Correo electronico</h4>
                                <input class="form-control" name="email"  type="email" value="{{ old('email') }}" required="" placeholder="ejemplo@dominio.com"/>
                            </div>                           
                              
                            <div class="form-group">
                                <h4>Contraseña</h4>
                                <input class="form-control" placeholder="Contraseña"  name="password" required="" type="password"/>
                            </div>
                           
                           <div class="checkbox">
                                <label><input type="checkbox" name="remember">Recordar datos</label>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3" align="center">
                                    <input type="submit" class="btn btn-primary" value="Ingresar"/> 
                                </div>
                            </div>
                            <br></br> 
                            <hr />      

                            @if (Auth::guest())
                                <li><a href="{{ url('/auth/register') }}">¿Usuario nuevo? Registrar...</a></li>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
