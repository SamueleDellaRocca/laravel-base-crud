@extends('template.base')

@section('pageTitle')
    Comics
@endsection


@section('pageMain')
    <main>
        <div class="container">
            <div class="row g-3 gx-3 gap-3 justify-content-center">
                @foreach ($comics as $comic)
                    <div class="bg-grigio card text-center col-5">
                        <h1><a href="{{ route('comic.show', $comic->id) }}">{{ $comic->title }}</a> </h1>
                        <div class="img">
                            <img class="w-50" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
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
                @endforeach
            </div>

            {{ $comics->links() }}
        </div>

    </main>
@endsection
