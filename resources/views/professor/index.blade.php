@extends('layouts.app')
@section('tittle', 'Lista de Professores')
@section('content')  
     
    <h1>Lista de Professores</h1>
    <a href="{{ route('professor.create') }}" class="btn btn-dark" >Cadastrar</a>
     <h2>Professores com nome "João" e sobrenome "Silva":</h2>
        @foreach ($professores_nome_joao_silva as $professor)
    <p> {{ $professor ->nome }} </p>
        @endforeach 
    <table class="table table-bordered">
        <thead>
            <th>Nome</th>
            <th>Disciplina</th>
            <th>Email</th>
            <th>Telefone</th>
        </thead>
        <tbody>
            @foreach ($professores as $professor)
                 <tr class="table-warning">
                <td>{{ $professor-> nome}}</td>
                <td>{{ $professor-> disciplina}}</td>
                <td>{{ $professor->contatoProfessor->email}}</td>
                <td>{{ $professor->contatoProfessor->telefone}}</td>
                <td>
                    <a href="{{ route('professor.edit', $professor->id) }}" class="btn btn-dark">Editar</a>
                    <a href="{{ route('professor.show', $professor->id) }}" class="btn btn-info">Visualizar</a>
                   <form action="{{route('professor.destroy', $professor->id)}}" method="post">
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