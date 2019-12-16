@extends('welcome')
@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

    <div class="mt-3">
        <div class="row">
            <a class="btn btn-primary" href="{{ route('usuarios.create') }}">
                <i class="fas fa-plus-circle"></i> Novo Usuário
            </a>
        </div>
        <div class="row mt-5">
            <table class="table">
                <thead class="">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Ultima atualização</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $users as $user )
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->last }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>
                            <a href="{{ route('usuarios.edit', $user->id) }}">
                                <i class="fas fa-user-edit"></i>
                            </a>
                            <a href="{{ route('usuarios.show', $user->id) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('usuarios.remove', $user->id) }}">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $users->links() }}
@endsection
