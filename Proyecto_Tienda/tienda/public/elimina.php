<?php
	$link = @mysql_connect("localhost", "root","raul") or die ("Error al conectar a la base de datos.");
    @mysql_select_db("tienda", $link) or die ("Error al conectar a la base de datos.");

    if (@_POST ['eliminar']) {
    	mysql_query('delete from users where email = '.$email);	
    }
    	
    mysql_close($link);
    }
    header('http://localhost/tienda/public/clientes');
?>