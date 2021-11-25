@extends('layouts.main')

@section('title', "Cadastrar Clientes")

@section('content')
<div class="mb-4">
            <h2>Cadastro de Clientes</h2>
        </div>
        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>

            <div class="form-group">
                <label for="debito">Débito</label>
                <input type="text" name="debito" id="debito" class="form-control">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" id="descricao" class="form-control">
            </div>


            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
@endsection
