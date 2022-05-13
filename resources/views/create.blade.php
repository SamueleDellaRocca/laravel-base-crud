@extends('template.base')

@section('pageTitle')
    New Comic
@endsection

@section('pageMain')
    <div class="container">
        <h1 class="text-center">creazione new comic</h1>
        <form method="POST" action="{{ route('store') }}">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group mb-5">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
            </div>

            <div class="form-group mb-5">
                <label for="thumb">URL Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" value="{{ old('thumb') }}">
            </div>

            <div class="form-group mb-5">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
            </div>

            <div class="form-group mb-5">
                <label for="series">Series</label>
                <input type="text" class="form-control" name="series" id="series" value="{{ old('series') }}">
            </div>

            <div class="form-group mb-5">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" id="price" value="{{ old('series') }}">
            </div>

            <div class="form-group mb-5">
                <label for="sale_date">Sale_Date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{ old('sale_date') }}">
            </div>

            <div class="input-group mb-5">
                <select class="custom-select p-2" id="type" name="type" value="{{ old('type') }}">
                    <option selected value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-info" href="{{ url()->previous() }}">BACK</a>
                <a class="btn btn-warning" href="{{ route('comic.index') }}">HOMEPAGE</a>
            </div>
        </form>
    </div>
@endsection
