@extends('layouts.app')
@section('tittle', 'Dados do Curso')
@section('content')  
    <h1>Dados do Curso</h1>
    <p>Nome:: {{ $curso->nome}}</p>
@endsection