@extends('adminlte::page')

@section('title', 'Novo Usuario')

@section('content_header')
    <h1>Novo Usuario</h1>
@stop

@section('content')

@include('_mensagens')

    <form action="{{ route('usuarios.store') }}" method="post">

      @include('usuarios._form')
    </form>
@stop

