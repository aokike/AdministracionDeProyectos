<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tienda de ropa</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
	  	<div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse"
	            data-target=".navbar-ex1-collapse">
	      		<span class="sr-only">Desplegar navegación</span>
	      		<span class="icon-bar"></span>
	      		<span class="icon-bar"></span>
	      		<span class="icon-bar"></span>
	    	</button>	    
	  	</div>

	    <ul class="nav navbar-nav">
			<li><a href="{{ url('/') }}">Playeras sudaderas y bordados "Los AdminProy"</a></li>			
		</ul>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <form class="navbar-form navbar-left" role="search">
		      		<div class="form-group">
		        		<input type="text" class="form-control" placeholder="Buscar">
		        		<button type="submit" class="btn btn-default" >Buscar</button>
			      	</div>	      	
		    	</form>
            <div class="collapse navbar-collapse navbar-ex1-collapse"> 
		    	
		 	
		    	<ul class="nav navbar-nav navbar-right"> 
		    		@if ((Auth::user()->tipo) == 'admin')
			    		<ul class="nav navbar-nav">
				            <li>
				                <a href="{{ url('/clientes') }}">Usuarios</a>
				            </li>
				            <li>
				                <a href="{{ url('/productos') }}">Productos</a>
				            </li>
				            <li>
				                <a href="">Pedidos</a>
				            </li>
				            <li>
				                <a href=""></span>Pagos</a>
				            </li>
				            <li>
				                <a href=""></span> Materia prima</a>
				            </li>
				        </ul>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administrador:   {{ Auth::user()->name }} <span class="glyphicon glyphicon-user"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Salir</a></li>
							</ul>
						</li>
					@else
						<ul class="nav navbar-nav">
			                <li>
			                    <a href="">Playeras</a>
			                </li>
			                <li>
			                    <a href="">Sudaderas</a>
			                </li>
			                <li>
			                    <a href=""><span class="glyphicons glyphicons-t-shirt" aria-hidden="true"></span> Gorras</a>
			                </li>
			                <li>
			                    <a href=""><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Mi carrito</a>
			                </li>
			                <li>
			                    <a href=""></span> Pedidos</a>
			                </li>
			                <li>
			                    <a href=""><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contacto</a>
			                </li>
			            </ul>
						<li class="dropdown">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuario:   {{ Auth::user()->name }}    <span class="glyphicon glyphicon-user"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Salir</a></li>
							</ul>
						</li>
					@endif  
		   		</ul>
		  	</div>
  		</div>	  	
	</nav>

	@yield('content')

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
