@extends('welcome')
@section('content')

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    <div class="col-12">
        <form method="POST" action="{{ route('usuarios.store') }}">
            @csrf
            <div class="form-row">
                <div class="col-md-12 mt-3">
                    <h3>Novo Usuário</h3>
                </div>

                <div class="col-md-12 mt-3">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" placeholder="Digite o nome" name="name" id="name">
                </div>

                <div class="col-md-12 mt-3">
                    <label for="last">Sobrenome</label>
                    <input type="text" class="form-control" placeholder="DIgite o sobrenome" name="last" id="last">
                </div>

                <div class="col-md-4 mt-3">
                    <a href="{{ route('usuarios.index') }}" class="btn btn-default">Voltar</a>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>

@endsection
