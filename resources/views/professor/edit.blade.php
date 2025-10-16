@extends('layouts.app')
@section('tittle', 'Editar Professor')
@section('content')  
    <h1>Editar Profesor</h1>
   <form action="{{ route("professor.update", $professor->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $professor->nome}}"><br>
        <label for="">Email:</label>
        <input type="email" name="email" id="email" value="{{ $professor->email}}"><br>
        <label for="">Disciplina:</label>
        <input type="disciplina" name="disciplina" id="disciplina" value="{{ $professor->disciplina}}"><br>
        <label for="">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="{{ $professor->telefone }}"><br>
        <label for="">Foto:</label>
        <input type="file" name="foto" id="foto">
        <img src="{{ $professor->foto }}" alt="" style="max-width: 400px">
        <button type="submit">Salvar</button>
    </form>
@endsection