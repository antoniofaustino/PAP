@extends('Admin.layouts.app')

@section('title', "Detalhe do produto { $product->name}")

@section('content')

<h1>Produto{{$product->name}}</h1>
<a href="{{route('products.index')}}" class="btn btn-primary">Voltar ao Inicio</a>

<ul>
    <li><strong> Nome:</strong>{{$product->name}}</li>
    <li><strong> Preço:</strong>{{$product->price}}</li>
    <li><strong> Descrição:</strong>{{$product->description}}</li>
</ul>

@endsection