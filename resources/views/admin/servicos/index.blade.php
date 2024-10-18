@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Lista de Serviços</h2>
        <a href="{{ route('servico.create') }}" class="btn btn-primary">Cadastrar</a>
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
                <th>Descrição</th>
                <th>Valor</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($servicos as $serv)
                <tr>
                    <td>{{ $serv->id }}</td>
                    <td>{{ $serv->titulo }}</td>
                    <td>{{ $serv->descricao }}</td>
                    <td>{{ $serv->valor }}</td>
                    <td>
                        <a href="{{ route('servico.show', ['id' => $serv->id]) }}" class="btn btn-primary">Visualizar</a>
                        <a href="{{ route('servico.edit', ['id' => $serv->id]) }}" class="btn btn-secondary">Editar</a>

                        <form action="{{ route('servico.destroy', ['id' => $serv->id]) }}" method="post"
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

    {{-- {{ $servicos->links() }} --}}
@endsection
