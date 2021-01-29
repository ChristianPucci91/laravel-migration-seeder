@extends('layouts.main-layout')

@section('content')

<div class="box">

  <p>id: {{ $brand -> id}}</p>
  <p>name: {{ $brand -> name}}</p>
  <p>Headquarters: {{ $brand -> headquarter}}</p>

</div>

@endsection
