
@extends('templet.layout')
 
 @section('content')

        @if(empty($people)) 
        empty array
        @else  
        @foreach ($people as  $person)
    <li>{{$person }}</li>
    @endforeach
    @endif
@stop 
    