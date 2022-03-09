@extends('layout.layout')

@section('main')
    <div class="container-fluid main">
        <div class="container pt-4">
            <div class="row p-4">
                @foreach ($data as $comic)
                    <div class="card col-2 m-2">
                        <a href="{{ route('homepage.show', $comic->id) }}">
                            <img src="{{ $comic["thumb"] }}" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
