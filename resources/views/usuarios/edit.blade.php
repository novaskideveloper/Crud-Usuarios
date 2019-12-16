@extends('welcome')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    <div class="panel panel-default">
        <div class="panel-heading"><h3>Edite o usuário</h3></div>

        <div class="panel-body">
            <form method="post" action="{{ route ('usuarios.update', $user->id) }}">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                <div class="form-group">
                    <label for="descricao">Nome</label>
                    <input type="text" class="form-control" placeholder="Descrição" name="description" required value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="preco">Sobrenome</label>
                    <input type="text" class="form-control" placeholder="Preço" name="price" required value="{{$user->last}}">
                </div>
                <a href="{{ route('usuarios.index') }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>

@endsection
