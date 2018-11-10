@extends('layouts.app')
@section('content')
  <h1>Crear Cuenta</h1>
  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  <form action="{{route('cuentas.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required placeholder="Nombre de la cuenta">
  </div>
  <div class="form-group">
    <label for="name">Número</label>
    <input type="text" class="form-control" name="numero" id="numero" aria-describedby="emailHelp" required placeholder="Número de la cuenta">
  </div>
  <div class="form-group">
    <label for="name">Banco</label>
    <select class="form-control" name="banco_id" id="banco_id">
      @foreach ($bancos->all() as $banco)
        <option value="{{ $banco->id }}"> {{ $banco->name }}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
