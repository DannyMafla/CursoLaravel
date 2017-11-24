<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CursoLaravel</title>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="css/responsive.css" rel="stylesheet" type="text/css">
		<link href="css/animate.css" rel="stylesheet" type="text/css">
		<link href="css/estilos.css" rel="stylesheet" type="text/css">
		<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

		<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.isotope.js"></script>
		<script type="text/javascript" src="js/wow.js"></script>
		<script type="text/javascript" src="js/classie.js"></script>
		<script type="text/javascript" src="funciones.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    	<center>
            <div class="title m-b-md">
            	Tabla Productos!...
            </div>
        </center>>
        <center><h3>Productos Activos</h3></center>
        @if (count($products)>0)
        <div class='container'>
	        <table class='table'>
	        	<td>Id</td>
	        	<td>Código</td>
	        	<td>Nombre</td>
	        	<td>Estado</td>
	        	<td>Precio</td>
	        	<tbody>
	        		@foreach ($products as $products)
	        		<tr>
	        			<td>{{ $products->id}}</td>
	        			<td>{{ $products->code}}</td>
	        			<td>{{ $products->name}}</td>
	        			<td>{{ $products->status}}</td>
	        			<td>{{ $products->price}}</td>
	        		</tr>
	        		@endforeach
	        	</tbody>
	        </table>
    	</div>
       	@endif
       
       	<center><h3>Productos Inactivos Menores a 100</h3></center>
       	@if (count($products1)>0)
        <div class='container'>
	        <table class='table'>
	        	<td>Id</td>
	        	<td>Código</td>
	        	<td>Nombre</td>
	        	<td>Estado</td>
	        	<td>Precio</td>
	        	<tbody>
	        		@foreach ($products1 as $products1)
	        		<tr>
	        			<td>{{ $products1->id}}</td>
	        			<td>{{ $products1->code}}</td>
	        			<td>{{ $products1->name}}</td>
	        			<td>{{ $products1->status}}</td>
	        			<td>{{ $products1->price}}</td>
	        		</tr>
	        		@endforeach
	        	</tbody>
	        </table>
    	</div>
       	@endif
  
       	<center><h3>Productos Inactivos de Mayor a Menor</h3></center>
       	@if (count($products2)>0)
        <div class='container'>
	        <table class='table'>
	        	<td>Id</td>
	        	<td>Código</td>
	        	<td>Nombre</td>
	        	<td>Estado</td>
	        	<td>Precio</td>
	        	<tbody>
	        		@foreach ($products2 as $products2)
	        		<tr>
	        			<td>{{ $products2->id}}</td>
	        			<td>{{ $products2->code}}</td>
	        			<td>{{ $products2->name}}</td>
	        			<td>{{ $products2->status}}</td>
	        			<td>{{ $products2->price}}</td>
	        		</tr>
	        		@endforeach
	        	</tbody>
	        </table>
    	</div>
       	@endif

    </body>
</html>