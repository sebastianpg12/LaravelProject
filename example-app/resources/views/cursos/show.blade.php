@extends('layouts.plantilla')

@section('title')
    {{ $curso->name }}
@endsection()

@section('content')
    <div style="text-align: center">
        <h1>Curso <br> <b>{{ $curso->name }}</b> </h1>
        <p><strong>Categoria: {{ $curso->categoria }}</strong></p>
    </div>

    <a href="{{route('cursos.index')}}">Volver a la lista de cursos</a>
@endsection()
