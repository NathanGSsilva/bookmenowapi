@extends('admin.dashboard')
@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Cadastrar Usuários</h2>
    </div>
    <hr>

    @if ($errors->any())
        <div class="boxError alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('categoria.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Seu Titulo"
                value="{{ old('titulo') }}">
        </div>
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem</label>
            <input type="file" name="imagem" class="form-control" id="imagem" placeholder="Seu Imagem"
                value="{{ old('imagem') }}">
        </div>


        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10">{{ old('descricao') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
