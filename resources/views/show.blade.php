@extends('template.base')

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section('pageMain')
    <div class="container">
        <div class="row">
            <div class="bg-grigio card text-center col-5">
                <h1>{{ $comic->title }} </h1>
                <div class="img">
                    <img class="w-75" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </div>
                <p>{{ $comic->description }}</p>
                <div>Prezzo: {{ $comic->price }}</div>
                <div class="text-end">Data di Uscita: {{ $comic->sale_date }}</div>

                <div class="d-flex justify-content-center gap-2">
                    <a class="btn btn-success mb-2" href="{{ route('comic.edit', $comic->id) }}">EDIT</a>
                    <form action="{{ route('comic.destroy', $comic->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger mb-2">DELETE</button>
                    </form>
                    <a class="btn btn-info mb-2" href="{{ url()->previous() }}">BACK</a>

                </div>

            </div>

        </div>
    </div>
@endsection
