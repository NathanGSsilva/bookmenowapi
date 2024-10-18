@extends('admin.dashboard')
@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Editar Categorias</h2>
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
    <form action="{{ route('categoria.update', ['id' => $categoria->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Seu Titulo"
                value="{{ old('titulo', $categoria->titulo) }}">
        </div>
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem</label>
            <input type="file" name="imagem" class="form-control" id="imagem" placeholder="Seu Imagem"
                value="{{ old('imagem', $categoria->imagem) }}">
            <img src="{{ $categoria->imagem }}">
        </div>


        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10">{{ old('titulo', $categoria->descricao) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
