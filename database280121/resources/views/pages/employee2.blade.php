@extends('layouts.main-layout')

@section('content')

<div class="box">

  <p> id: {{ $employee -> id }}</p>
  <p> Name: {{ $employee -> name }}</p>
  <p> Lastname: {{ $employee -> lastname }}</p>
  <p> DateOfHiring: {{ $employee -> hiring }}</p>
  
</div>

@endsection
