@extends('layouts.app')
@section('tittle', 'Lista de Alunos')
@section('content')       
<h1>Lista de Alunos</h1>
    <a href="{{ route('aluno.create') }}" class="btn btn-dark" >Cadastrar</a>
    <table class="table table-bordered">

        <thead>
            <th>Matricula</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de nascimento</th>
            <th>Opções</th>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
                <tr class="table-warning">
                <td>{{ $aluno-> matricula}}</td>
                <td>{{ $aluno-> nome}}</td>
                <td>{{ $aluno-> email}}</td>
                <td>{{ $aluno-> data_nascimento}}</td>
                <td>
                    <a href="{{ route('aluno.edit', $aluno->id) }}" class="btn btn-dark">Editar</a>
                    <a href="{{ route('aluno.show', $aluno->id) }}" class="btn btn-info">Vizualizar</a>
                    <form action="{{route('aluno.destroy', $aluno->id)}}" method="post">
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