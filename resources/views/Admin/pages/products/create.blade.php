@extends('Admin.layouts.app')

@section('content')

    <h1> Cadastrar Novo Produto</h1>

    @include('Admin.includes.alerts')

        <form action = "{{route('products.store')}}" method="post" enctype = "multipart/form-data">
            @csrf
            {{-- csrf é uma maneira simplificada da linha de baixo, cria um certificação --}}
            {{-- <input type = "text" name="_token" value="{{csrf_token()}}"> --}}
            <div class="form-group">
                <input type = "text" class="form-control" name = "name" placeholder="nome" value="{{old('name')}}"/>
            </div>
            <div class="form-group">
                <input type = "text" class="form-control"name = "description" placeholder="Descrição:" value = "{{old('Description')}}"/>
            </div>
             <div class="form-group">
                <input type = "text" class="form-control"name = "price" placeholder="Preço:" value = "{{old('price')}}"/>
            </div>
            <div class="form-group">
                <input type = "file" class="form-control"name = "photo">
            </div>
            <div class="form-group">
                <button type ="submit" class="btn btn-success">Enviar</button>
            </div>   
        </form>

@endsection 
