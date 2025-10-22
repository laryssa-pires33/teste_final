@extends('layouts.app')
@section('tittle', 'Cadastro da Turma')
@section('content') 
    <h1>Cadastro da Turma</h1>
    <form action="{{ route("turma.store")}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" >Descrição:</span>
        </div>
            <input type="text" name="descricao" aria-label="First name" class="form-control">
        </div><br>

        <div class="input-group">
        <div class="input-group-prepend">
            <label class="input-group-text" >Curso:</label>
                <select name="curso_id" id="curso_id">
                    <option value="">Selecione</option>
                        @foreach ($cursos as $curso)
                    <option value="{{ $curso->id}}">{{ $curso->nome}}</option>
                        @endforeach
                </select>
        </div>

    <button type="submit"  class="btn btn-lg btn-primary">Salvar</button>
@endsection