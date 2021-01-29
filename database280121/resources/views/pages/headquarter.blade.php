@extends('layouts.main-layout')

@section('content')

 <h1>Headquarters:</h1>

 <ul>

   @foreach ($headquarters as $headquarter)

     <li>
       <a href="{{ route('headquarter-show', $headquarter -> id) }}">

         {{ $headquarter -> name }}

       </a>
     </li>

   @endforeach

 </ul>

@endsection
