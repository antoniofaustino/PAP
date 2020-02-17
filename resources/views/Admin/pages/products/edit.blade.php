@extends('Admin.layouts.app')
@section('title', 'Editar produto')
@section('content')

    <h1> Editar Produto{{$id}}</h1>
        <form action = "{{route('products.update', $id)}}" method="post">
        @method('PUT')
        {{-- @method(PUT) faz o que a linha de baixo faz mas mais simplicado --}}
        {{-- <input type="hidden" name ="_method" value = "PUT"> --}}
            @csrf
            {{-- csrf é uma maneira simplificada da linha de baixo, cria um certificação --}}
            {{-- <input type = "text" name="_token" value="{{csrf_token()}}"> --}}
            <input type = "text" name = "name" placeholder="nome"/>
            <input type = "text" name = "Description" placeholder="Descrição:"/>
            <button type ="submit">Enviar</button>
        </form>
@endsection 
