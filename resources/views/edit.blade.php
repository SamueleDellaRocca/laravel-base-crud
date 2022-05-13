@extends('template.base')

@section('pageTitle', 'Edit Data')

@section('pageMain')
    <div class="container">
        <h1 class="text-center">Modifica dati comic</h1>
        <form method="POST" action="{{ route('comic.update', $comic->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group mb-5">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}">
            </div>

            <div class="form-group mb-5">
                <label for="thumb">URL Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" value="{{ $comic->thumb }}">
            </div>

            <div class="form-group mb-5">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ $comic->description }}</textarea>
            </div>

            <div class="form-group mb-5">
                <label for="series">Series</label>
                <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}">
            </div>

            <div class="form-group mb-5">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" id="price" value="{{ $comic->price }}">
            </div>

            <div class="form-group mb-5">
                <label for="sale_date">Sale_Date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
            </div>

            <?php
            $selected = $comic->type == 'comic book' ? 'selected' : '';
            $selected2 = $comic->type == 'graphic novel' ? 'selected' : '';
            ?>

            <div class="input-group mb-5">
                <select class="custom-select p-2" id="type" name="type">
                    <option {{ $selected }} value="comic book">Comic Book</option>
                    <option {{ $selected2 }} value="graphic novel">Graphic Novel</option>
                </select>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-info" href="{{ url()->previous() }}">BACK</a>
            </div>
        </form>
    </div>
@endsection
