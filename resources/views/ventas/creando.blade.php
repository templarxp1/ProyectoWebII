@extends('body.cuerpo')
@extends('header.navbar')

@section('title', 'Creando Producto ')

@section('navbar')
@section('cuerpo')
<div class="container mt-5">
    <h2 class="mb-4">Agregar Producto</h2>
    <form action="{{ route('ventas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre Venta</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese el nombre del producto" required>
        </div>
        <div class="form-group">
            <label for="VentaID">Venta #</label>
            <input type="number" class="form-control" id="stock" name="stock" placeholder="Ingrese la cantidad en stock" required>
        </div>
        <div class="form-group">
            <label for="Cantidad">Cantidad</label>
            <input type="number" step="0.01" class="form-control" id="PrecioUnitario" name="PrecioUnitario" placeholder="Ingrese el precio unitario" required>
        </div>
        <div class="form-group">
            <label for="PrecioUnitario">Precio Unitario</label>
            <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" placeholder="Ingrese la descripción del producto" required></textarea>
        </div>
        <div class="form-group">
            <label for="Total">Total</label>
            <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" placeholder="Ingrese la descripción del producto" required></textarea>
        </div>
        <div class="form-group">
            <label for="FechaVenta">Fecha Venta</label>
            <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" placeholder="Ingrese la descripción del producto" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Producto</button>
    </form>
</div>


@endsection()