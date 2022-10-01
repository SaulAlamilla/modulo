@extends('tema.sidebar')

@section('title', "Ver estudio")

@section('contenido')
<div class="center">
    <h3>Conclusión del estudio de mercado</h3>

    <form>
        <div class="form-group my-5">
          <small id="emailHelp" class="form-text text-muted">Escribe la conclusión del estudio de mercado</small>
          <textarea name="especificacion_mercado" id="TextAreaEspecificacion" cols="40" rows="10" class="form-control" placeholder="Conclusión"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

@endsection