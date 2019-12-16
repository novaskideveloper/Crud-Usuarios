@extends('welcome')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Detalhes do usuário</h3></div>

        <div class="panel-body">
            <div class="form-group">
                <label for="descricao">Nome</label>
                <input type="text" class="form-control" disabled value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="preco">Sobrenome</label>
                <input type="text" class="form-control" disabled value="{{ $user->last }}">
            </div>
            <a class="btn btn-primary" href="{{ route('usuarios.index') }}" class="btn btn-default">Voltar</a>
        </div>
    </div>

@endsection
