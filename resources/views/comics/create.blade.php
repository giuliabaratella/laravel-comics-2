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
                    <h2>Add a new comic</h2>
                    <div class="card p-2">
                        <form action="{{ route('comics.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label" rows="5">Description</label>
                                <textarea class="form-control" id="description" name="description">
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label for="thumb" class="form-label">Image Url</label>

                                <input type="text" id="thumb" name="thumb" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>

                                <input type="text" id="price" name="price" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="sale_date" class="form-label">Sale date</label>

                                <input type="text" id="sale_date" name="sale_date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="series" class="form-label">Series</label>

                                <input type="text" id="series" name="series" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>

                                <input type="text" id="type" name="type" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
    </main>

@endsection
