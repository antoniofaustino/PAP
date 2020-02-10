@extends('Admin.layouts.app')

@section('title','Gestão de Produtos')

@section('content')

    <h1>Exibindo os produtos</h1>

    @component('Admin.components.card')
    um card de exemplo
    @endcomponent

    @include("Admin.pages.alerts.alerts", ['content'=> 'alerta do preço dos produtos'])
    

    <hr>
    
    @if (isset($products))
        @foreach ($products as $product)
            <p class="@if($loop->last) last @endif" >{{$product}} </p>    
        @endforeach
        
    @endif

    <hr>
    @forelse($products as $product)
     <p class="@if($loop->last) last @endif" >{{$product}} </p>
    @empty
        <p> Nao existem produtos cadastrados</p>
    @endforelse
    <hr>

    @if($teste === '123')
        É igual

        @elseif($teste == 123)
        É igual a 123
        
        @else
        É difernete
    @endif

    @unless($teste === '123' )
    fdsdaf
    @else
    gdfg

    @endunless

    @isset($teste2)
        <p>{{ $teste2 }}</p>
    @endisset
     
    @empty ($teste3)
        <p>Vazio</p>
    @endempty

    @auth
        <p> Autenticação</p>
    @else
        <p>Não autenticado</p>

    @endauth
    
    @guest
    <p> Não atenticado</p>
    @endguest

    @switch($teste)
        @case(1)
        Igual1
            @break
        @case(2)
        Igual2
            @break
        @case(123)
        igual 123
            @break
        @default
        default
    @endswitch  

@endsection

@push('styles')
    <style>
        .last{background:#CCC;}
    </style>
@endpush
@push('scripts')
<script>
    document.body.style.background = '#999'    
</script>
@endpush