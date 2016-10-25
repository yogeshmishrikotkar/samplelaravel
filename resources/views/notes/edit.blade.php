
@extends('templet.layout')


@section('content')

<h3>Update New Note Here</h3> 

<form method="POST" action="/notes/{{$note->id}}"  >
    {{method_field('PATCH')}}
   <textarea name="title" > {{$note->title}}</textarea>
    <Button type="submit" >Update Note</Button>
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
</form>
 

@stop