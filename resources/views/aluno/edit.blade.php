@extends('layouts.app')
@section('tittle', 'Editar Aluno')
@section('content')  
    <h1>Editar Aluno</h1>
    <form action="{{ route("aluno.update", $aluno->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Matricula:</label>
        <input type="text" name="matricula" id="matricula" value="{{ $aluno->matricula}}"><br>
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $aluno->nome}}"><br>
        <label for="">Email:</label>
        <input type="email" name="email" id="email" value="{{ $aluno->email}}"><br>
        <label for="">Data de nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento" value="{{ $aluno->data_nascimento}}"><br>
        <label for="">Foto:</label>
        <input type="file" name="foto" id="foto">
        <img src="{{ $aluno->foto }}" alt="" style="max-width: 400px">
        
        <div class="input-group">
        <div class="input-group-prepend">
            <label class="input-group-text" >Turma:</label>
                <select name="turma_id" id="turma_id">
                    <option value="">Selecione</option>
                        @foreach ($turmas as $turma)
                            <option value="{{ $turma->id}}">{{ $turma->descricao}}</option>
                        @endforeach
                </select>
        </div>

        <label for="">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="{{ $aluno->contatoAluno->telefone }}"><br>
        <button type="submit">Salvar</button>
    </form>
@endsection