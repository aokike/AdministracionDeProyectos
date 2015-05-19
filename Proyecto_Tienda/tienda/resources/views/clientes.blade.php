
@extends('app')

@section('content')
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
            <div class="col-md-10 col-md-offset-1">
                  

                <div class="bt-login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3>Usuarios</h3>
                    </div>
                    <div class="panel-body" style="margin:10px;">
                        <form class="form-horizontal" role="form" method="POST" action="">     
                           
                            <table class="table table-hover">

                                <tr>

                                    <th>[]</th>
                                    <th>Nombre</th>
                                    <th>Correo electrónico</th>
                                    <th>Dirección</th>
                                    <th>Telefono</th>
                                    <th>Privilegios</th>
                                </tr>
                                <?php  
                                      $link = @mysql_connect("localhost", "root","raul")
                                          or die ("Error al conectar a la base de datos.");
                                      @mysql_select_db("tienda", $link)
                                          or die ("Error al conectar a la base de datos.");

                                      $query = "select name, email, direccion, telefono, tipo FROM users";
                                          
                                      $result = mysql_query($query);
                                      
                                      while($row = mysql_fetch_array($result)) {
                                        ?>
                                            <td><input type="checkbox" name="chbx[]" value="<?php echo $row ['email'] ?>"></td>
                                        <?php

                                        echo "<td>".$row["name"] ."</td>";
                                        echo "<td>".$row["email"] ."</td>";
                                        echo "<td>".$row["direccion"] ."</td>";
                                        echo "<td>".$row["telefono"] ."</td>";
                                        echo "<td>".$row["tipo"] ."</td></tr>";                                        
                                      }
                                      
                                      mysql_free_result($result);
                                      mysql_close($link);
                                    ?>                              
                            </table>

                            <form class="form-group" align="left">
                                <input type="text" class="input-sm" placeholder="Buscar" align="left" />
                                <script language="javascript">
                                    function mostrar(){
                                        document.getElementById('agregarNuevo').style.visibility = 'visible';
                                        $('html,body').animate({
                                            scrollTop: $("#agregarNuevo").offset().top
                                        }, 200);
                                    }                           
                                </script>
                                <button type="submit" class="btn btn-default" align="left">Buscar</button>
                                <input type="button" value="Agregar" onclick="mostrar()" class="btn btn-primary">
                                <button type="button" name="modificar" class="btn btn-warning">Modificar</button>
                                    <input style="margin-bottom:-10px;" value="Eliminar"  class="btn btn-danger" type="submit" action="elimina.php"/>  
                            </form> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="agregarNuevo" style="visibility:hidden">
        <div class="row" >
            <div class="col-md-6 col-md-offset-3">
                <div class="bt-login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3>Agregar nuevo usuario</h3>
                    </div>
                    
                    <div class="panel-body" style="margin:10px;">
                        <form class="form-horizontal" role="form" method="POST" action="inserta.php">
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

                            <div class="form-group">
                                <h4>Tipo de usuario</h4>
                                <input style="margin-bottom:2px;" type="text" class="form-control" name="tipo">
                            </div>                         
                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3" align="center">
                                    <input style="margin-bottom:-10px;" value="Registrar"  class="btn btn-primary btn-lg" type="submit"> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>


@endsection


