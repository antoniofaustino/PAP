@extends('admin.layouts.app')
@section('content')
<h1> Cadastrar Novo Produto</h1>
<form action = "" method="post">
<input type = "text" name = "name" placeholder="nome"/>
<input type = "text" name = "Description" placeholder="Descrição:"/>
<button type ="submit">Enviar</button>
</form>
@endsection
