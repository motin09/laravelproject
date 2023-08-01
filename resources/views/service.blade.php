@extends('master')
@section('title', 'service-Page')
@section('content')
 @for ($index=0;$index<4;$index++)
 {{$services[$index]}}<br>

 @endfor
@endsection
