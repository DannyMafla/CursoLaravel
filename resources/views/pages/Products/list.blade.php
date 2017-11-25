@extends('templates.main')

@section('tittle','Lista de Productos')

@section('content')
	<h1>Productos</h1>
  	<table class="table table-striped table-condensed">
  		<thead>	
   			<tr>
				<th>Id</th>
				<th>Código</th>
				<th>Nombre</th>
				<th>Estado</th>
				<th>Precio</th>
				<th>Tipo_Producto</th>
   			</tr>
   			<tbody>
        		@foreach ($productos as $product)
        		<tr>
        			<td>{{ $product->id}}</td>
        			<td>{{ $product->code}}</td>
        			<td>{{ $product->name}}</td>
        			<td>{{ $product->status}}</td>
        			<td>{{ $product->price}}</td>
        			<td>{{ $product->type->name}}</td>
        		</tr>
        		@endforeach
    		</tbody>
    	</thead>
    </table>
@endsection