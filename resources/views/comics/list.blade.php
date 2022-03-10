@extends('layout.layout')

@section('main')
    <div class="container-fluid main">
        <div class="container pt-4">
            <div class="row p-4">
                @foreach ($data as $key => $comic)
                    <p> {{$key}}
                        <a class="list-link" href="{{ route('comics.show', $comic->id) }}">
                            {{$comic->title}}
                        </a>
                        <form action="{{route('comics.destroy', $comic->id)}}"
                            method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Elimina">
                        </form>
                    </p>
                @endforeach
            </div>
        </div>
    </div>
@endsection