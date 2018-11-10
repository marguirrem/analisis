@extends('layouts.app')
@section('content')
  <h1>Editar Banco</h1>
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
  <form action="{{route('bancos.update',[$banco->id])}}" method="post">
    @csrf  
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="name">Nombre del Banco</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required value="{{$banco->name}} {{ old('name')}}">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

@endsection
