@extends('layouts.app')
@section('content')
<div class="row">
@foreach ($product as $prod)
  <div class="col-sm-3">
  <a href="products/{{ $prod->id_product }}">
    <div class="photogrid">
      <img class="img-thumbnail img-fluid"  src="<?php  echo url('/'); ?>{{ $prod->image }}" alt="">
      {{ $prod->price }}
      {{ $prod->name }}
      {{ $prod->description }}

      {{ $prod->sku }}

    </div>
  </a>  
  </div>
@endforeach 
</div>

@stop