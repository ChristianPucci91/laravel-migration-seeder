@extends('layouts.main-layout')

@section('content')

 <p> id: {{ $headquarter -> id }}</p>
 <p> Name: {{ $headquarter -> name }}</p>
 <p> Address : {{ $headquarter -> address }}</p>

@endsection
