@extends('adminlte::page')

@section('title', 'Lista de Servicos')

@section('content_header')
    <h1>Lista de Servicos</h1>
@stop

@section('content')
    @if(session('mensagem'))
        <div class="alert alert-success">
            {{ session('mensagem') }}
        </div>

    @endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">nome</th>
            <th scope="col">ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($servicos as $servico)
                <tr>
                <th>{{ $servico->id }}</th>
                <td>{{ $servico->nome }}</td>
                   <td>
                       <a href="{{ route('servicos.edit', $servico) }}" class= "btn btn-primary">Atualizar</a>
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
    {{ $servicos->links() }}
</div>

<div class"float-right">

  <a href="{{route('servicos.create') }}" class="btn btn-success">Novo Servico</a>

</div>
@stop

