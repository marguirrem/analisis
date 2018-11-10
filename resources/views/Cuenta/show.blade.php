@extends('layouts.app')
@section('content')
 <br>
  <div class="card" style="width: 18rem; margin:0 auto;">
    <div class="card-header">
      <h1>{{$cuenta->name}}</h1>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $cuenta->numero}}</li>
      <li class="list-group-item">{{$cuenta->banco_id}}</li>
    </ul>
  </div>

@endsection
