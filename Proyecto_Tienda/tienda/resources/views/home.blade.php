@extends('app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="../../favicon.ico">
    <title>Tienda Ropa</title>
    <link href="{{ asset('/css/carousel.css') }}" rel="stylesheet">   
    <!-- Latest compiled and minified CSS -->
	</head>
<body>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators 
	    <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		    <li data-target="#myCarousel" data-slide-to="4"></li>
	    </ol>
	    <div class="carousel-inner" role="listbox">

	    	<div class="item active">
	        	<img class="first-slide" src="{{ asset('/img/gorra.jpg') }}" alt="First slide">
	          		<div class="container">
	            		<div class="carousel-caption">
	              			<h1>Camisa POLO</h1>
	              			<p>Variedad de camisas</p>
	            		</div>
	          		</div>
	          	</img>
	        </div>

	        <div class="item">
	          	<img class="second-slide" src="{{ asset('/img/parches.png') }}" alt="Second slide">
	          		<div class="container">
	            		<div class="carousel-caption">
	              			<h1>Gorras</h1>
	            		</div>
	          		</div>
	          	</img>
	        </div>

	        <div class="item">
	          	<img class="third-slide" src="{{ asset('/img/polo2.png') }}" alt="Third slide">
	          		<div class="container">
	            		<div class="carousel-caption">
	              			<h1>Parches</h1>
	            		</div>
	          		</div>
	          	</img>
	        </div>

	        <div class="item">
	          	<img class="third-slide" src="{{ asset('/img/sudadera.png') }}" alt="Third slide">
	          		<div class="container">
	            		<div class="carousel-caption">
	              			<h1>Sudaderas</h1>
	            		</div>
	          		</div>
	          	</img>
	        </div>

	      	<div class="item">
	          	<img class="third-slide" src="{{ asset('/img/sudaderaNike.png') }}" alt="Third slide">
	          		<div class="container">
	            		<div class="carousel-caption">
	              			<h1>Sudadera</h1>
	            		</div>
	          		</div>
	          	</img>
	        </div>

	      	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	        	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	        	<span class="sr-only">Previous</span>
	     	</a>

	      	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	        	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        	<span class="sr-only">Next</span>
	      	</a>
	    </div> -->


	    <!-- Marketing messaging and featurettes
	    ================================================== -->
	    <!-- Wrap the rest of the page in another container to center all the content. -->

	    <div class="container marketing">
	      <!-- Three columns of text below the carousel -->
	      	<div class="row">
	        	<div class="col-lg-3">
	          		<img class="img-circle" src="" alt="Generic placeholder image" width="140" height="140">
	          		<h2>Camisas</h2>
	          		<p>Modelos de camisas.</p>
	          		<p><a class="btn btn-default" href="#" role="button">Ver modelos&raquo;</a></p>
	        	</div><!-- /.col-lg-4 -->

	        	<div class="col-lg-3">
	          		<img class="img-circle" src="" alt="Generic placeholder image" width="140" height="140">
	          		<h2>Gorra </h2>
	         		<p>Diseños de gorras.</p>
	          		<p><a class="btn btn-default" href="#" role="button">Ver gorras &raquo;</a></p>
	        	</div><!-- /.col-lg-4 -->

	        	<div class="col-lg-3">
	          		<img class="img-circle" src="" alt="Generic placeholder image" width="140" height="140">
	          		<h2>Parches</h2>
	          		<p>Conoce toda la gama de parches disponibles.</p>
	         		<p><a class="btn btn-default" href="#" role="button">Ver parches &raquo;</a></p>
	        	</div><!-- /.col-lg-4 -->
	        	<div class="col-lg-3">
	          		<img class="img-circle" src="" alt="Generic placeholder image" width="140" height="140">
	          		<h2>Sudaderas</h2>
	          		<p>Preparate para la proxima temporada de frío con sudaderas personalizadas.</p>
	          		<p><a class="btn btn-default" href="#" role="button">Ver sudaderas &raquo;</a></p>
	        	</div><!-- /.col-lg-4 -->
	     	 </div><!-- /.row -->
	      <!-- FOOTER -->
	    </div><!-- /.container -->
	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    
	    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	    <script src="http://getbootstrap.com/assets/js/vendor/holder.js"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
	</div>
</body>


@endsection
