@extends('layouts.app')
@section('tittle', 'Dados do Professor')
@section('content')  
    
    <h1>Dados do Professor</h1>
    <p>Nome: {{ $professor->nome}}</p>
    <p>Email: {{ $professor->ContatoProfessor->email}}</p>
    <p>Disciplina: {{ $professor->disciplina}}</p>
    <p>Telefone: {{ $professor->ContatoProfessor->telefone }}</p>
    <img src="{{ asset($professor->foto) }}" style="max-width: 400px">

@endsection