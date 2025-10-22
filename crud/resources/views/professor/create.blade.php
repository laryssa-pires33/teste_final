@extends('layouts.app')
@section('tittle', 'Cadastro de Professor')
@section('content') 
        <h1>Cadastro de Professor</h1>
    <form action="{{ route("professor.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" >Nome: </span>
        </div>
            <input type="text" name="nome" aria-label="First name" class="form-control">
        </div><br>

        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" >Email: </span>
        </div>
            <input type="email" name="email" aria-label="First name" class="form-control">
        </div><br>

        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" >Disciplina: </span>
        </div>
            <input type="text" name="disciplina" aria-label="First name" class="form-control">
        </div><br>

        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" >Telefone: </span>
        </div>
            <input type="text" name="telefone" aria-label="First name" class="form-control">
        </div><br>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
             <span class="input-group-text" id="inputGroupFileAddon01">Foto:</span>
        </div>
            <input type="file" name="foto" id="foto">
         </div>


        <button type="submit"  class="btn btn-lg btn-primary">Salvar</button>
    </form>
@endsection