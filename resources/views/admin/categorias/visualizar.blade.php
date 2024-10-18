@extends('admin.dashboard')
@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Visualizar Categoria</h2>
    </div>
    <hr>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <td>{{ $categoria->id }}</td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>{{ $categoria->titulo }}</td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td><img src="{{ $categoria->imagem }}"></td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td>{{ $categoria->descricao }}</td>
        </tr>
    </table>
    <a href="{{ route('categoria.edit', ['id' => $categoria->id]) }}" class="btn btn-primary">Editar</a>
    <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Cancelar</a>
@endsection
