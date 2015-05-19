
@extends('app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
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
                <form class="form-group" align="right">
                    <script language="javascript">
                        function mostrar(){
                            document.getElementById('agregarNuevoP').style.visibility = 'visible';
                            $('html,body').animate({
                                scrollTop: $("#agregarNuevoP").offset().top
                            }, 200);
                        }                           
                    </script>
                    <input type="button" value="Agregar" onclick="mostrar()" class="btn btn-primary">
                    <button type="button" name="modificar" class="btn btn-warning">Modificar</button>
                    <button type="button" name="eliminar" class="btn btn-danger">Eliminar</button>
                </form>                
                <div class="bt-login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3>Productos</h3>
                    </div>
                    <div class="panel-body" style="margin:10px;">
                        <form class="form-horizontal" role="form" method="POST" action="">                            
                            <table class="table table-hover">
                                <tr>
                                    <th>[]</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>Descripcion</th>
                                </tr>
                                <?php  
                                      $link = @mysql_connect("localhost", "root","raul")
                                          or die ("Error al conectar a la base de datos.");
                                      @mysql_select_db("tienda", $link)
                                          or die ("Error al conectar a la base de datos.");

                                      $query = "select nombre, gama, costo, descripcion FROM producto";
                                          
                                      $result = mysql_query($query);
                                      
                                      while($row = mysql_fetch_array($result)) {
                                        ?>
                                            <td><input type="checkbox" name="chbx[]" value="<?php echo $row ['nombre'] ?>"></td>
                                        <?php

                                        echo "<td>".$row["nombre"] ."</td>";
                                        echo "<td>".$row["gama"] ."</td>";
                                        echo "<td> $ ".$row["costo"] ."</td>";
                                        echo "<td>".$row["descripcion"] ."</td>";                                        
                                      }
                                      
                                      mysql_free_result($result);
                                      mysql_close($link);
                                    ?>                          
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container" id="agregarNuevoP" style="visibility:hidden">
        <div class="row" >
            <div class="col-md-6 col-md-offset-3">
                <div class="bt-login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3>Agregar nuevo producto</h3>
                    </div>
                    
                    <div class="panel-body" style="margin:10px;">
                        <form class="form-horizontal" role="form" method="POST" action="inserta.php">
                            <input style="margin-bottom:-20px;" type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <h4>Nombre</h4>
                                <input style="margin-bottom:-20px;" type="text" class="form-control" required="" name="nombre" value="{{ old('name') }}">
                            </div>

                            <div class="form-group">
                                <h4>Gama</h4>
                                <input style="margin-bottom:-20px;" type="text" class="form-control" required="" name="gama" value="{{ old('email') }}" />
                            </div>

                            <div class="form-group">
                                <h4>Talla</h4>
                                <input style="margin-bottom:-20px;" type="text" class="form-control" required="" name="talla">
                           </div>

                            <div class="form-group">
                                <h4>Costo</h4>
                                <input style="margin-bottom:-20px;" type="text" class="form-control" required="" name="costo">
                           </div>

                            <div class="form-group">
                                <h4>Descripción</h4>
                                <input style="margin-bottom:-20px;" type="text" class="form-control" required="" name="descripcion">
                            </div>

                            <div class="form-group">
                                <h4>Imagen</h4>
                                <input type="file" name="imagen" id="imagen" />
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


