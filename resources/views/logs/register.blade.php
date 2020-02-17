@extends('Admin.layouts.app')
@section('title','Registar')

@section('content')

<h1>Register</h1>
    <form action = "" method="post">
    <div class="form-group">
        <input type = "text" class="form-control" name = "name" placeholder="nome" value=""/>
    </div class="form-group">

    <div class="form-group"> 
        <input type = "email" class="form-control" name = "email" placeholder="Email" value=""/>
    </div>

    <div class="form-group">        
        <input type = "password" class="form-control" name = "password" placeholder="Password" value=""/>
    </div>

    <div class="form-group">
                <button type ="submit" class="btn btn-success">Criar</button>
    </div>   
    </form>

@endsection