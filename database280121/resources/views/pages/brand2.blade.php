@extends('layouts.main-layout')

@section('content')

<p>id: {{ $brand -> id}}</p>
<p>name: {{ $brand -> name}}</p>
<p>Headquarters: {{ $brand -> headquarter}}</p>



@endsection
