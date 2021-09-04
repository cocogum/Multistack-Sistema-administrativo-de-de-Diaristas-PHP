@extends('adminlte::page')

@section('title', 'Lista de Usuarios')

@section('content_header')
    <h1>Lista de Servicos</h1>
@stop

@section('content')
    @include('_mensagens_sessao')

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">email</th>
            <th scope="col">ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($usuarios as $usuario)
                <tr>
                <th>{{ $usuario->id }}</th>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                   <td>
                       <a href="{{ route('usuarios.edit', $usuario) }}" class= "btn btn-primary">Atualizar</a>
                       <form action="{{ route('usuarios.destroy', $usuario) }}", method="post" style="display: inline">
                       @method('DELETE')
                        @csrf
                       <button type='submit' class="btn btn-danger" onClick="return confirm('Tem certeza que desea excluir?')">
                           APAGAR
                        </button>
                       </form>
                  </td>
            </tr>
        @empty
           <tr></tr>
                <th></th>
                <th>Nenhum Registro foi encontrado</th>
                <th></th>
           <tr></tr>
        @endforelse

      </tbody>
  </table>
    <div class= "d-flex justify-content-center"
    {{ $usuarios->links() }}
</div>

<div class"float-right">

  <a href="{{route('usuarios.create') }}" class="btn btn-success">Novo Usuario</a>

</div>
@stop

