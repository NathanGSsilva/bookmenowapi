@extends('admin.dashboard')
@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Visualizar Serviços</h2>
    </div>
    <hr>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <td>{{ $servico->id }}</td>
        </tr>

        <tr>
            <th>Imagem</th>
            <td><img src="{{ $servico->fotos[0]->imagem }}"></td>
        </tr>

        <tr>
            <th>Nome Usuário</th>
            <td>{{ $servico->usuario->nome }}</td>
        </tr>


        <tr>
            <th>Categoria</th>
            <td>{{ $servico->categoria->titulo }}</td>
        </tr>

        <tr>
            <th>Titulo</th>
            <td>{{ $servico->titulo }}</td>
        </tr>

        <tr>
            <th>Valor</th>
            <td>{{ $servico->valor }}</td>
        </tr>

        <tr>
            <th>Avaliação</th>
            <td>#####</td>
        </tr>

        <tr>
            <th>Telefone</th>
            <td>{{ $servico->telefone }}</td>
        </tr>

        <tr>
            <th>Celular</th>
            <td>{{ $servico->celular }}</td>
        </tr>

        <tr>
            <th>Endereço</th>
            <td>{{ $servico->endereco }}, {{ $servico->numero }}</td>
        </tr>

        <tr>
            <th>Completo</th>
            <td>{{ $servico->complemento }}</td>
        </tr>

        <tr>
            <th>Bairro</th>
            <td>{{ $servico->bairro }}</td>
        </tr>

        <tr>
            <th>Cidade</th>
            <td>{{ $servico->cidade }}</td>
        </tr>

        <tr>
            <th>Estado</th>
            <td>{{ $servico->estado }}</td>
        </tr>

        <tr>
            <th>Cep</th>
            <td>{{ $servico->cep }}</td>
        </tr>

        <tr>
            <th>Descrição</th>
            <td>{{ $servico->descricao }}</td>
        </tr>
    </table>

    <a href="{{ route('servico.edit', ['id' => $servico->id]) }}" class="btn btn-primary">Editar</a>
    <a href="{{ route('servico.index') }}" class="btn btn-secondary">Cancelar</a>
@endsection
