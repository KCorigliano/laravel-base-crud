@extends('layout.layout')

@section('main')



<div class="container-fluid main">
  <form action="{{ route('comics.update' ['id' => $comic-id]) }}" method="post">
    @csrf

    @method('PUT')

    <div>
      <label for="title">Titolo</label>
      <input type="text" name="title" id="title" value="{{$comic->title}}">
    </div>
    <div>
      <label for="title">description</label>
      <input type="text" name="description" id="description" value="{{$comic->description}}">
    </div>
    <div>
      <label for="title">thumb</label>
      <input type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">
    </div>
    <div>
      <label for="title">price</label>
      <input type="text" name="price" id="price" value="{{$comic->price}}">
    </div>
    <div>
      <label for="title">series</label>
      <input type="text" name="series" id="series" value="{{$comic->series}}">
    </div>
    <div>
      <label for="title">sale_date</label>
      <input type="text" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
    </div>
    <div>
      <label for="title">type</label>
      <input type="text" name="type" id="type" value="{{$comic->type}}">
    </div>
    <input type="submit" value="invia">
  </form>
</div>
@endsection