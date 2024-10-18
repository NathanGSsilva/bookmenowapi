@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Lista de Categorias</h2>
        <a href="{{ route('categoria.create') }}" class="btn btn-primary">Cadastrar</a>
    </div>
    <hr>

    @if (session('sucesso'))
        <div class="alert alert-success">
            {{ session('sucesso') }}
        </div>
    @endif


    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagem</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($categorias as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->titulo }}</td>
                    <td><img src="{{ $cat->imagem }}"></td>
                    <td>
                        <a href="{{ route('categoria.show', ['id' => $cat->id]) }}" class="btn btn-primary">Visualizar</a>
                        <a href="{{ route('categoria.edit', ['id' => $cat->id]) }}" class="btn btn-secondary">Editar</a>

                        <form action="{{ route('categoria.destroy', ['id' => $cat->id]) }}" method="post"
                            style="display: inline-block">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Excluir</button>

                        </form>



                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
