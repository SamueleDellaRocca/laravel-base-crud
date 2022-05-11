@extends('template.base')

@section('pageTitle')
    New Comic
@endsection

@section('pageMain')
    <div class="container">
        <h1 class="text-center">creazione new comic</h1>
        <form method="POST" action="{{ route('store') }}">
            @csrf
            <div class="form-group mb-5">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="form-group mb-5">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>

            <div class="form-group mb-5">
                <label for="series">Series</label>
                <input type="text" class="form-control" name="series" id="series">
            </div>

            <div class="form-group mb-5">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>

            <div class="form-group mb-5">
                <label for="sale_date">Sale_Date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date">
            </div>

            <div class="input-group mb-5">
                <select class="custom-select p-2" id="type" name="type">
                    <option selected value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
