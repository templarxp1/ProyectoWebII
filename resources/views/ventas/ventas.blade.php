@extends('header.navbar')
@extends('body.cuerpo')

@section('title', 'Productos')

@section('navbar')


<div class="container">
  <h1>VENTAS</h1>
  <hr>
  {{-- href="{{route('')}}" --}}
  <a  class="btn btn-primary">Agregar Venta</a>
  <hr>
  LISTA DE VENTAS
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha Venta</th>
            <th scope="col">Producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio Unitario</th>
            <th scope="col">Total Venta</th>
          </tr>
        </thead>
{{--         
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <th scope="row">1</th>
                <td>{{$producto->Nombre}}</td>
                <td>{{$producto->stock}}</td>
                <td>{{$producto->PrecioUnitario}}</td>
                <td>{{$producto->Descripcion}}</td>
                <td>
                  <a href="{{route ('productos.show', $producto ->ProductoID)}}" class="btn btn-primary">Editar</a>
                  <form action="{{route('productos.destroy', $producto->ProductoID)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                  </form>
                </td>
            </tr>
          @endforeach
        </tbody> --}}
      </table>
</div>
    
    
@endsection()