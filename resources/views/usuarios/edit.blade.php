@extends('adminlte::page')

@section('title', 'Editar Usuarios')

@section('content_header')
    <h1>Editar Usuarios</h1>
@stop

@section('content')
@include('_mensagens')

    <form action="{{ route('usuarios.update', $usuarios ) }}" method="post">
        @method('PUT')

        @include('usuarios._form')
    </form>
@stop


