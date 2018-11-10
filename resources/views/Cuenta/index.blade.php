@extends('layouts.app')
@section('content')
  <h1>Cuentas</h1>
  <a class="btn btn-primary" href="{{route('cuentas.create')}}">Crear Cuenta</a>
  @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif
  <table class="table">
    <thead>
      <tr>
        <td>Nombre</td>
        <td>Ver</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>
    </thead>
    <tbody>
            @foreach ($cuentas as $cuenta)
              <tr>
                <td>{{ $cuenta->name}}</td>
                <td><a class="btn btn-primary" href="{{route('cuentas.show',[$cuenta->id])}}"><i class="far fa-eye"></i></a> </td>
                <td><a class="btn btn-info" href="{{route('cuentas.edit',[$cuenta->id])}}"><i class="far fa-edit"></i> </a></td>
                <td><a class="btn btn-danger" href="{{route('cuentas.destroy',[$cuenta->id])}}"><i class="fas fa-trash-alt"></i> </a> </td>
              </tr>
            @endforeach
          </tbody>

  </table>
@endsection
