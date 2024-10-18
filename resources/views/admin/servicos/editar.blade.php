@extends('admin.dashboard')
@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Editar Serviços</h2>
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


    <form action="{{ route('servico.update', ['id' => $servico->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="usuario_id" class="form-label">Usuário</label>
            <select name="usuario_id" id="usuario_id" class="form-control">
                <option value="1">Edson Rodrigues</option>
                <option value="2">Maria da Silva</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select name="categoria_id" id="categoria_id" class="form-control">
                <option value="1">Tecnologia</option>
                <option value="2">Construção</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Seu Titulo"
                value="{{ old('titulo', $servico->titulo) }}">
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="text" name="valor" class="form-control" id="valor"
                value="{{ old('valor', $servico->valor) }}">
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control" id="telefone"
                value="{{ old('telefone', $servico->telefone) }}">
        </div>

        <div class="mb-3">
            <label for="celular" class="form-label">Celular</label>
            <input type="text" name="celular" class="form-control" id="celular"
                value="{{ old('celular', $servico->celular) }}">
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" name="endereco" class="form-control" id="endereco"
                value="{{ old('endereco', $servico->endereco) }}">
        </div>


        <div class="mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="text" name="numero" class="form-control" id="numero"
                value="{{ old('numero', $servico->numero) }}">
        </div>


        <div class="mb-3">
            <label for="complemento" class="form-label">Complemento</label>
            <input type="text" name="complemento" class="form-control" id="complemento"
                value="{{ old('complemento', $servico->complemento) }}">
        </div>


        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" name="bairro" class="form-control" id="bairro"
                value="{{ old('bairro', $servico->bairro) }}">
        </div>


        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" name="cidade" class="form-control" id="cidade"
                value="{{ old('cidade', $servico->cidade) }}">
        </div>


        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" name="estado" class="form-control" id="estado"
                value="{{ old('estado', $servico->estado) }}">
        </div>

        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" name="cep" class="form-control" id="cep"
                value="{{ old('cep', $servico->cep) }}">
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Fotos</label>
            <input type="file" name="foto[]" class="form-control" id="foto" multiple>
            <img src="{{ $servico->fotos[0]->imagem }}">
        </div>


        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10">{{ old('descricao', $servico->descricao) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('servico.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
