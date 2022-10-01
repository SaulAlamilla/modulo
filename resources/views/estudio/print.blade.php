@extends('tema.sidebar')

@section('title', "Ver estudio")

@section('contenido')
<div class="center">
    <div class="my-3">
        <h3>Imprimir los resultados</h3>
    </div>

    <form>
        <button type="submit" class="btn btn-primary">Generar documento</button>
    </form>
</div>

@endsection