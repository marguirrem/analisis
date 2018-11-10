@extends('layouts.app')
@section('content')
  <h1>Editar Cuenta</h1>
  @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif
  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  <form action="{{route('docs.update',[$doc->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
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
    <input type="text" class="form-control" name="numero" id="numero" required value="{{$doc->numero}}">
  </div>
  <div class="form-group">
    <label for="name">Monto:</label>
    <input type="text" class="form-control" name="monto" placeholder="monto" required value="{{$doc->monto}}">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

@endsection
