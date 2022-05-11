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
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </div>
                <p>{{ $comic->description }}</p>
                <div>Prezzo: {{ $comic->price }}</div>
                <div class="text-end">Data di Uscita: {{ $comic->sale_date }}</div>
            </div>

            <h2><a href="{{ route('comic.index') }}">HOMEPAGE</a></h2>
        </div>
    </div>
@endsection
