
@extends('templet.layout')


@section('content')

 
<ul>
@foreach($cards   as $card)
<a href="{{$card->pathTo()}}"><li>{{$card->title}}</li></a>
@endforeach
</ul>
@stop