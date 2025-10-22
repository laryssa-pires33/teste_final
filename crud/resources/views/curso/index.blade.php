@extends('layouts.app')
@section('tittle', 'Lista de Cursos')
@section('content')  
     
<h1>Lista de Cursos</h1>
    <a href="{{ route('curso.create') }}" class="btn btn-dark" >Cadastrar</a>
    <h2>Cursos diferentes de balé:</h2>
    @foreach ($cursos_diferente_bale as $curso)
    <p> {{ $curso->nome }} </p>
    @endforeach 
    <br><br>    
    <h2>Cursos com o nome "administração" ou "gestão":</h2>
    @foreach ($cursos_igual_adm_gestao as $curso)
    <p> {{ $curso->nome }} </p>
    @endforeach     
    <table class="table table-bordered">
        <thead>
            <th>Nome</th>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr class="table-warning">
                <td>{{ $curso-> nome}}</td>
                <td>
                    <a href="{{ route('curso.edit', $curso->id) }}" class="btn btn-dark">Editar</a>
                    <a href="{{ route('curso.show', $curso->id) }}" class="btn btn-info">Vizualizar</a>
                    <form action="{{route('curso.destroy', $curso->id)}}" method="post">
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