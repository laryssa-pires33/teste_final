@extends('layouts.app')
@section('tittle', 'Editar Aluno')
@section('content')  
    <h1>Editar Aluno</h1>
    <form action="{{ route("curso.update", $curso->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $curso->nome}}"><br>
        <button type="submit">Salvar</button>
    </form>
@endsection