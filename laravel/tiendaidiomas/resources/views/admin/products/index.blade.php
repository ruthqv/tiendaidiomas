@extends('layouts.app')
@section('content') 
<h1 class="text-primary">Control de products</h1>
 <a href="{{ url('/products/create') }}" class="btn btn-info btn-xs">Crear nuevo</a>
<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Precio</th>
        <th class="text-center">SKU</th>
        <th class="text-center">Description</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
        <tr>
            <td class="text-center">{{ $product->id_product }}</td>
            <td class="text-center">{{ $product->name }}</td>
            <td class="text-center">{{ $product->price }}</td>
            <td class="text-center">{{ $product->sku }}</td>
            <td class="text-center">{{ $product->description }}</td>



        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Precio</th>
        <th class="text-center">SKU</th>
        <th class="text-center">Description</th>

        <th class="text-center">Acciones</th>
    </tr>
  </tfoot>
</table>


@endsection