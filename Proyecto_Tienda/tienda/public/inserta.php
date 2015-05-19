<?php
    $link = @mysql_connect("localhost", "root","raul") or die ("Error al conectar a la base de datos.");
    @mysql_select_db("tienda", $link) or die ("Error al conectar a la base de datos.");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $tipo = $_POST['tipo'];

    $insert = "insert into users (name, email, password, direccion, telefono, tipo) values ('$name', '$email', '$password', '$direccion', '$telefono', '$tipo')";
    $insertSQL = mysql_query($insert);
    if (!$insertSQL) {
        echo '<script>alert("No se registro el cliente");</script>';  
        echo '<meta http-equiv="Refresh" content="0;http://localhost/tienda/public/clientes">';          
    } else {
        echo '<script>alert("Cliente registrado correctamente");</script>';   
        echo '<meta http-equiv="Refresh" content="0;http://localhost/tienda/public/clientes">';    
    }    
    mysql_close($link);
?>