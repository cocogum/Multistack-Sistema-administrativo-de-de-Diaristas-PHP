@extends('adminlte::page')

@section('title', 'Novo Serviço')

@section('content_header')
    <h1>Novo Serviço</h1>
@stop

@section('content')

@include('_mensagens')

    <form action="{{ route('servicos.store') }}" method="post">
        @method('PUT')

      @include('servicos._form')
    </form>
@stop
