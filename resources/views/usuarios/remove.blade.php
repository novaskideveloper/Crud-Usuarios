@extends('welcome')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Deletar o usuário</h3></div>

        <div class="panel-body">
            <form method="post" action="{{route ('usuarios.destroy', $user->id)}}">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <h5>Tem certeza que deseja remover o usuário?</h5>
                        <hr>
                        <h4>Sobre o usuário</h4>
                        <p>Nome: {{$user->name}}</p>
                        <p>Sobrenome: {{$user->last}}</p>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">Remover</button>
                <a href="{{ route('usuarios.index') }}" class="btn btn-default">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
