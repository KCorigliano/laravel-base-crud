@extends('layout.layout')

@section('main')



<div class="container-fluid main">
  <form action="{{ route('comics.store') }}" method="post">
    @csrf

    <div>
      <label for="title">Titolo</label>
      <input type="text" name="title" id="title">
    </div>
    <div>
      <label for="title">description</label>
      <input type="text" name="description" id="description">
    </div>
    <div>
      <label for="title">thumb</label>
      <input type="text" name="thumb" id="thumb">
    </div>
    <div>
      <label for="title">price</label>
      <input type="text" name="price" id="price">
    </div>
    <div>
      <label for="title">series</label>
      <input type="text" name="series" id="series">
    </div>
    <div>
      <label for="title">sale_date</label>
      <input type="text" name="sale_date" id="sale_date">
    </div>
    <div>
      <label for="title">type</label>
      <input type="text" name="type" id="type">
    </div>
    <input type="submit" value="invia">
  </form>
</div>
@endsection