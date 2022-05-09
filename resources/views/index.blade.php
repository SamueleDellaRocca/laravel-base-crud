@extends('template.base')

@section('pageTitle')
    Comics
@endsection


@section('pageMain')
<main>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <h1> {{ $comic->title }} </h1>
            @endforeach
        </div>
        {{ $comics->links() }}
    </div>
     
</main>
@endsection