@extends('templates.main')

@section('tittle','Creacion de Productos')

@section('content')
    <h1>Creación Productos</h1>
    <table class="table table-striped table-condensed">
        <form action="/Producto" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="code">Código:</label>
                <input type="text" class="form-control" name="code">
            </div>
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name">
            </div>
            
            <div class="form-group">
                <label for="price">Precio:</label>
                <input type="double" class="form-control" name="price">
            </div>
             <div class="form-group">
                <label >Tipo Producto:</label>
                <select class="form-control" name="product_type">
                    @foreach ($product_types as $product_type)
                        <option value="{{ $product_type->id }}">
                            {{$product_type->name}}
                        </option>>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="status">Estado:</label>
                <select  class="form-control" name="status">
                    <option value="A">Activo</option>     
                    <option value="I">Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-default">Grabar</button>
        </form>
    </table>
 @endsection