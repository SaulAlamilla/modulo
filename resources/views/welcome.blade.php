@extends('tema.app')

@section('title', "Inicio")

@section('contenido')
    <div class="col-sm-12">
        <a href="{{ route('estudio.index') }}" class="btn btn-primary">Ver estudios</a>
    </div>
@endsection
