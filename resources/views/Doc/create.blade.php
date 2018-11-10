@extends('layouts.app')
@section('content')
  <h1>Crear Documento</h1>
  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  <form action="{{route('docs.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="name">Tipo</label>
    <select class="form-control" name="tipo_id">
      @foreach ($tipos as $tipo)
        <option value="{{$tipo->id}}">{{ $tipo->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="name">Número</label>
    <input type="text" class="form-control" name="numero" id="numero" required placeholder="Número de documento">
  </div>
  <div class="form-group">
    <label for="name">Monto:</label>
    <input type="text" class="form-control" name="monto" placeholder="monto" required >
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
