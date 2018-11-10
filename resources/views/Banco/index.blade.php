@extends('layouts.app')
@section('content')
  <h1>Bancos</h1>
  <a class="btn btn-primary" href="{{route('bancos.create')}}">Crear Banco</a>
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
            @foreach ($bancos as $banco)
              <tr>
                <td>{{ $banco->name}}</td>
                <td><a class="btn btn-primary" href="{{route('bancos.show',[$banco->id])}}"><i class="far fa-eye"></i></a> </td>
                <td><a class="btn btn-info" href="{{route('bancos.edit',[$banco->id])}}"><i class="far fa-edit"></i> </a></td>
                <td><a class="btn btn-danger" href="{{route('bancos.destroy',[$banco->id])}}"><i class="fas fa-trash-alt"></i> </a> </td>
              </tr>
            @endforeach
          </tbody>
  </table>
@endsection
