
@extends('templet.layout')


@section('content')

 
<ul>
@foreach($card->notes  as $note)
<a href="{{$note->pathFor()}}"> <li>{{$note->title}} </li></a>  
@endforeach
</ul>
<hr><hr>
<h3>Add New Note Here</h3>
<form method="POST" action="/cards/{{$card->id}}/notes" >
    
{{ csrf_field() }}    
    <textarea name="title" > </textarea>
    <Button type="submit" > Add New Note </Button>
<!--    <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
</form>


@stop