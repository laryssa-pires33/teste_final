@extends('layouts.app')
@section('tittle', 'Editar Turma')
@section('content')  
    <h1>Editar Turma</h1>
    <form action="{{ route("turma.update", $turma->id) }}" method="post" >
        @csrf
        @method('PUT')
        <label for="">Descrição:</label>
        <input type="text" name="descricao" id="descricao" value="{{ $turma->descricao }}"><br>
        <label class="input-group-text" >Curso:</label>
            <select name="curso_id" id="curso_id">
                    <option value="{{ $turma->curso_id }}" selected>Selecione</option>
                    <option value="{{ $turma->curso_id }}" selected>{{ $turma->curso->nome }}</option>
                    @foreach ($cursos as $curso)
                        <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                    @endforeach
            </select>
        <button type="submit">Salvar</button>
    </form>
@endsection