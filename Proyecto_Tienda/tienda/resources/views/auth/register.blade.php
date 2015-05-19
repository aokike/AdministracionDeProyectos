<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
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
    <div class="container" >
        <div class="row" >
            <div class="col-md-6 col-md-offset-3">
                <div class="bt-login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3>Registro</h3>
                    </div>
                    <div class="panel-body" style="margin:10px;">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                            <input style="margin-bottom:-20px;" type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <h4>Nombre</h4>
                                <input style="margin-bottom:-20px;" type="text" class="form-control" required="" name="name" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <h4>Correo electronico</h4>
                                <input style="margin-bottom:-20px;" type="email" class="form-control" required="" name="email" value="{{ old('email') }}" />
                            </div>

                            <div class="form-group">
                                <h4>Contraseña</h4>
                                <input style="margin-bottom:-20px;" type="password" class="form-control" required="" name="password">
                           </div>

                            <div class="form-group">
                                <h4>Confirmar contraseña</h4>
                                <input style="margin-bottom:-20px;" type="password" class="form-control" required="" name="password_confirmation">
                            </div>

                            <div class="form-group">
                                <h4>Telefono</h4>
                                <input style="margin-bottom:-20px;" type="text" class="form-control" name="telefono">
                            </div>

                            <div class="form-group">
                                <h4>Dirección</h4>
                                <input style="margin-bottom:2px;" type="text" class="form-control" name="direccion">
                            </div>

                            <input style="margin-bottom:-20px;" type="hidden" name="tipo" value="cliente">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3" align="center">
                                    <input style="margin-bottom:-10px;" type="submit" class="btn btn-primary btn-lg" value="Registrar"/> 
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>