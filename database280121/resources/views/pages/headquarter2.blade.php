@extends('layouts.main-layout')

@section('content')

 <div class="box">

   <p> id: {{ $headquarter -> id }}</p>
   <p> Name: {{ $headquarter -> name }}</p>
   <p> Address : {{ $headquarter -> address }}</p>
   
 </div>

@endsection
