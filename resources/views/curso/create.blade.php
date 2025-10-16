@extends('layouts.app')
@section('tittle', 'Cadastro do Curso')
@section('content') 
    <h1>Cadastro do Curso</h1>
    <form action="{{ route("curso.store")}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" >Nome: </span>
        </div>
            <input type="text" name="nome" aria-label="First name" class="form-control">
        </div><br>

    <button type="submit"  class="btn btn-lg btn-primary">Salvar</button>
@endsection