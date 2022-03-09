@extends('layout.layout')

@section('main')
<ul>
    <li><strong>address</strong>: {{ $data->title }}</li>
    <li><strong>city</strong>: {{ $data->description }}</li>
    <li><strong>region</strong>: {{ $data->thumb }}</li>
    <li><strong>province</strong>: {{ $data->price }}</li>
    <li><strong>country</strong>: {{ $data->series }}</li>
    <li><strong>description</strong>: {{ $data->sale_date }}</li>
    <li><strong>active</strong>: {{ $data->type }}</li>
  </ul>
@endsection