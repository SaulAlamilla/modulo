@extends('tema.sidebar')

@section('title', "Ver estudio")

@section('contenido')
<div class="center">
    <div class="my-3">
        <h3>Conceptos a estudiar</h3>
    </div>

    <div class="divider"><hr></div>

    <form>
        <div class="form-group my-5">
          <input type="email" class="form-control" id="newconcept" aria-describedby="emailHelp" placeholder="Ingresa un concepto a estudiar">
          <small id="emailHelp" class="form-text text-muted">Escríbe el concepto y agrégalo.</small>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

</div>

@endsection