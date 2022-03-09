@extends('layout.layout')

@section('main')



<div class="container-fluid main">
  <h1>Dettagli fumetto #{{$comic->title}}</h1>
    <p><strong>title</strong>: {{ $comic->title }}</p>
    <p><strong>description</strong>: {{ $comic->description }}</p>
    <p><strong>thumb</strong>: {{ $comic->thumb }}</p>
    <p><strong>price</strong>: {{ $comic->price }}</p>
    <p><strong>series</strong>: {{ $comic->series }}</p>
    <p><strong>sale_date</strong>: {{ $comic->sale_date }}</p>
    <p><strong>type</strong>: {{ $comic->type }}</p>
</div>
@endsection