@extends('tema.app')

@section('title', "Listado de estudios")

@section('contenido')

    <div class="row">
    @foreach ($estudios as $estudio)

        <div class="col-12 col-md-6 col-lg-4 my-3">
            <div class="card shadow cards">
                <h5 class="card-header" style="background-color: #1d1b31; color: white;"> {{ $estudio->nombre }} </h5>
                <div class="card-body">
                <h5 class="card-title">Objetivo del estudio:</h5>
                <p class="card-text"> {{ $estudio->objetivo }}</p>
                <a class="btn btn-light" href="{{ route('estudio.concepts') }}" role="button">Editar</a>
                </div>
            </div>
        </div>

    @endforeach
    <div class="col-12 col-md-6 col-lg-4 my-auto">
        <div class="card shadow cards">
            <a class="btn btn-light" href="{{ route('estudio.create') }}" role="button" style="font-size: 90px"><strong>+</strong></a>
            </div>
        </div>
    </div>

    </div>

    <style>
    .cards{
        transition: all 0.2s ease;
        cursor: pointer;
    }
    .cards:hover{
        box-shadow: 5px 6px 6px 2px #e9ecef;
        transform: scale(1.06);
    }
    </style>

@endsection