@extends('layouts.app')
@section('tittle', 'Lista de Turma')
@section('content')  
     
<h1>Lista de Turma</h1>
    <a href="{{ route('turma.create') }}" class="btn btn-dark" >Cadastrar</a> 
    <h2>Turmas com id maior que 10:</h2>
    @foreach ($turma_id_10 as $turma)
    <p> {{ $turma->nome }} </p>
    @endforeach
    <br><br>
    <h2>Quantidade de turmas cadastradas: {{ $total_turmas }}</h2>
    <br><br> 
<table class="table table-bordered">
            <th>Descrição</th>
            <th>Curso</th>
            <th>Opções</th> 
        <thead></thead>
    <tbody>
        @foreach ($turmas as $turma)
            <tr class="table-warning">
                <td>{{ $turma-> descricao}}</td>
                <td>{{ $turma->curso->nome}}</td>
                <td>
                    <a href="{{ route('turma.edit', $turma->id) }}" class="btn btn-dark">Editar</a>
                    <a href="{{ route('turma.show', $turma->id) }}" class="btn btn-info">Vizualizar</a>
                    <form action="{{route('turma.destroy', $turma->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                    <button type="submit"class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection