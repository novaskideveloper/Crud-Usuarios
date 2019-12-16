@extends('welcome')
@section('content')

    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Hello, Laravel!</h1>
                <p>Pequeno e simples sistema de crud de usuários desenvolvido em Laravel Framework com Bootstrap em sua
                    versão 4.</p>
                <p><a class="btn btn-primary btn-lg" href="{{ route('usuarios.index') }}" role="button">Vê Mais</a></p>
            </div>
        </div>
    </main>

@endsection
