@extends('layouts.app')
@section('content')
  <h1>Documentos</h1>
  <a class="btn btn-primary" href="{{route('docs.create')}}">Crear Documento</a>
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
            @foreach ($docs as $doc)
              <tr>
                <td>{{ $doc->id}}</td>
                <td><a class="btn btn-primary" href="{{route('docs.show',[$doc->id])}}"><i class="far fa-eye"></i></a> </td>
                <td><a class="btn btn-info" href="{{route('docs.edit',[$doc->id])}}"><i class="far fa-edit"></i> </a></td>
                <td><a class="btn btn-danger" href="{{route('docs.destroy',[$doc->id])}}"><i class="fas fa-trash-alt"></i> </a> </td>
              </tr>
            @endforeach
          </tbody>

  </table>
@endsection
