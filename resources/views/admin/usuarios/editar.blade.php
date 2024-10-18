@extends('admin.dashboard')
@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Editar Usuários</h2>
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
    <form action="{{ route('usuario.update', ['id' => $usuario->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu nome"
                value="{{ old('nome', $usuario->nome) }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Seu email"
                value="{{ old('email', $usuario->email) }}">
        </div>
        <p class="alert alert-info">Mantenha o campo vazio, caso deseja manter a senha atual</p>

        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Sua senha">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirme a Senha</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                placeholder="Confirme sua senha">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('usuario.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
