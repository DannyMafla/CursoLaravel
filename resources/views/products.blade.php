<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CursoLaravel</title>

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
        <table>
        <td>	
        <h3>Productos Activos</h3>
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
       </td>
       <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
       <td>
       	<h3>Productos Inactivos Menores a 100</h3>
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
       </td>
       <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
       <td>
       	<h3>Productos Inactivos de Mayor a Menor</h3>
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
       </td>
   </table>
    </body>
</html>
