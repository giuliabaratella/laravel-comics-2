@extends('layouts.app')

@section('title', 'Add Comic')

@section('content')
    <main>
        <div id="jumbo">
        </div>
        <div id="create-comics">
            <div class="blueline">
            </div>
            <div class="container">
                <div class="py-5">
                    <h2>Update {{ $comic->title }}</h2>
                    <div class="card p-2">
                        <form {{-- action="{{ route('comics.update') }}"  --}} method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title', $comic->title) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label" rows="10">Description</label>
                                <textarea class="form-control" id="description" name="description">
                                    {{ old('description', $comic->description) }}
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label for="thumb" class="form-label">Image Url</label>

                                <input type="text" id="thumb" name="thumb" class="form-control"
                                    value="{{ old('thumb', $comic->thumb) }}">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>

                                <input type="text" id="price" name="price" class="form-control"
                                    value="{{ old('price', $comic->price) }}">
                            </div>
                            <div class="mb-3">
                                <label for="sale_date" class="form-label">Sale date</label>

                                <input type="text" id="sale_date" name="sale_date" class="form-control"
                                    value="{{ old('sale_date', $comic->sale_date) }}">
                            </div>
                            <div class="mb-3">
                                <label for="series" class="form-label">Series</label>

                                <input type="text" id="series" name="series" class="form-control"
                                    value="{{ old('series', $comic->series) }}">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>

                                <input type="text" id="type" name="type" class="form-control"
                                    value="{{ old('type', $comic->type) }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
    </main>

@endsection
