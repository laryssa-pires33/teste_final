z@extends('layouts.app')
@section('tittle', 'Cadastro de Aluno')
@section('content') 
    <h1>Cadastro de Aluno</h1>
    <form action="{{ route("aluno.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Matrícula</span>
        </div>
            <input type="text" name="matricula" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" >Nome: </span>
        </div>
            <input type="text" name="nome" aria-label="First name" class="form-control">
        </div><br>
         
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">@</span>
        </div>
        <input type="email" name="email" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1">
        </div><br>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Data de Nascimento:</span>
         </div>
            <input type="date" name="data_nascimento" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-sm">
         </div><br>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
             <span class="input-group-text" id="inputGroupFileAddon01">Foto</span>
        </div>
            <input type="file" name="foto" id="foto">
         </div><br>

        <div class="input-group">
        <div class="input-group-prepend">
             <span class="input-group-text" id="inputGroupFileAddon01">Turma</span>
                <select name="turma_id" id="turma_id">
                    <option value="">Selecione</option>
                        @foreach ($turmas as $turma)
                            <option value="{{ $turma->id}}">{{ $turma->descricao}}</option>
                        @endforeach
                </select>
        </div><br>

        <br><div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" >Telefone: </span>
        </div>
            <input type="text" name="telefone" aria-label="First name" class="form-control">
        </div><br>

        <button type="submit"  class="btn btn-lg btn-primary">Salvar</button>
    </form>
@endsection