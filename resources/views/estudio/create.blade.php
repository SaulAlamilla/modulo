@extends('tema.app')

@section('title', "Nuevo estudio")

@section('contenido')
    <div class="col-sm-12 text-center" style="color:#464646">

    </div>
    <form action="{{ route('estudio.store') }}" method="POST">
        @csrf
        <div class="row my-2" style="color:#464646; font-size:20px">
            <div class="col-sm-12 my-2">
                <label for="InputNombre" class="form-label"><strong>● Nombre del estudio</strong></label>
                <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="Ingresa el nombre del estudio de mercado" value="{{ old('nombre') }}">
            </div>

            <div class="col-sm-6 my-2">
                <label for="TextAreaObjetivo" class="form-label"><strong>● Objetivo</strong></label>
                <textarea name="objetivo" id="TextAreaObjetivo" cols="30" rows="5" class="form-control" placeholder="Ingresa el objetivo del estudio de mercado">{{ old('objetivo') }}</textarea>
            </div>

            <div class="col-sm-6 my-2">
                <label for="TextAreaEspecificos" class="form-label"><strong>● Objetivos especificos</strong></label>
                <textarea name="objetivos_especificos" id="TextAreaEspecificos" cols="30" rows="5" class="form-control" placeholder="Ingresa los objetivos específicos">{{ old('objetivos_especificos') }}</textarea>
            </div>

            <div class="col-sm-12 my-2">
                <label for="TextAreaEspecificacion" class="form-label"><strong>● Especificacion del mercado</strong></label>
                <textarea name="especificacion_mercado" id="TextAreaEspecificacion" cols="30" rows="5" class="form-control" placeholder="Ingresa la especificación del mercado">{{ old('especificacion_mercado') }}</textarea>
            </div>

            <div class="col-sm-12 my-4">
                <div class="">
                    <a href="{{ route('estudio.index') }}" class="btn btn-primary">Listar estudios</a>
                    <button type="submit" class="btn btn-primary" style="float:right">
                        Guardar
                    </button>
                </div>
            </div>

            
        </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection