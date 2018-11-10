@extends('layouts.app')
@section('content')
  <h1>Crear Banco</h1>
  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  <form action="{{route('bancos.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="name">Nombre del Banco</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required placeholder="Banco...">
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
