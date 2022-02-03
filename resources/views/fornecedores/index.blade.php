@extends('layouts.main')

@section('title', 'Fornecedores')

@section('content')
<section class="container_table">
    <div class="container_table_items">
        <div class="container_table_header">
            <div>
                <h1>Fornecedores Cadastrados</h1>
                <h5>Veja os fornecedores cadastrados abaixo:</h5>
            </div>
            <div>
                <a href="{{ url('fornecedores/create') }}" class="btn_form_create">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path></svg>
                    <span>Novo fornecedor</span>
                </a>
            </div>
        </div>
        <table cellspacing="0">
            <tbody>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Empresa</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>CPF</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                @foreach ($fornecedores as $fornecedor)
                <tr>
                    <td>{{$fornecedor->nome}}</td>
                    <td>{{$fornecedor->nomeEmpresa}}</td>
                    <td>{{$fornecedor->email}}</td>
                    <td>{{$fornecedor->telefone}}</td>
                    <td>{{$fornecedor->endereco}}</td>
                    <td>{{$fornecedor->cpf}}</td>
                    <td>
                        <div class="container_table_buttons">
                            <a href="{{url("fornecedores/$fornecedor->id/edit")}}">
                                <button type="button" class="btn_table_edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="M4 21a1 1 0 0 0 .24 0l4-1a1 1 0 0 0 .47-.26L21 7.41a2 2 0 0 0 0-2.82L19.42 3a2 2 0 0 0-2.83 0L4.3 15.29a1.06 1.06 0 0 0-.27.47l-1 4A1 1 0 0 0 3.76 21 1 1 0 0 0 4 21zM18 4.41 19.59 6 18 7.59 16.42 6zM5.91 16.51 15 7.41 16.59 9l-9.1 9.1-2.11.52z"></path></svg>
                                    <span>Alterar</span>
                                </button>
                            </a>
                            <form action="{{url("fornecedores/$fornecedor->id/delete")}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn_table_delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg>
                                    <span>Excluir</span>
                                </button>
                            </form>
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection