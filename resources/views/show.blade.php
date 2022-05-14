@extends('template.base')

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section('pageMain')
    <div class="container">
        <div class="row justify-content-center">
            <div class="bg-grigio card text-center col-5">
                <a class="link_mine" href="{{ url()->previous() }}">
                    <h1>{{ $comic->title }} </h1>
                    <div class="img">
                        <img class="w-50" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    </div>
                    <p>{{ $comic->description }}</p>
                    <div>Prezzo: {{ $comic->price }}</div>
                    <div class="text-end">Data di Uscita: {{ $comic->sale_date }}</div>
                </a>
                <div class="d-flex justify-content-center gap-2">
                    <a class="btn btn-success mb-2" href="{{ route('comic.edit', $comic->id) }}">EDIT</a>
                    <form action="{{ route('comic.destroy', $comic->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger mb-2">DELETE</button>
                    </form>

                </div>

            </div>

        </div>
    </div>
@endsection
