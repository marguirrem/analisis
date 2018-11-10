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
  <form action="{{route('cuentas.update',[$cuenta->id])}}" method="post">
    @csrf
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" id="name"  required value="{{$cuenta->name}}">
  </div>
  <div class="form-group">
    <label for="name">Número</label>
    <input type="text" class="form-control" name="numero" id="numero"  required value="{{$cuenta->numero}}">
  </div>
  <div class="form-group">
    <label for="name">Banco</label>
    <select class="form-control" name="banco_id" id="banco_id">
      @foreach ($bancos->all() as $banco)
        <option value="{{ $banco->id }}"> {{ $banco->name }}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>

@endsection
