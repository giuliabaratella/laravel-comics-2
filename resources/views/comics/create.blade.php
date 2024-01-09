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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card p-2">
                        <form action="{{ route('comics.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="description" class="form-label" rows="10">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    value="{{ old('description') }}">

                                </textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="thumb" class="form-label">Image Url</label>

                                <input type="text" id="thumb" name="thumb" value="{{ old('thumb') }}"
                                    class="form-control @error('thumb') is-invalid @enderror">
                                @error('thumb')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>

                                <input type="text" id="price" name="price" value="{{ old('price') }}"
                                    class="form-control @error('price') is-invalid @enderror" required>
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="sale_date" class="form-label">Sale date</label>

                                <input type="text" id="sale_date" name="sale_date" value="{{ old('sale_date') }}"
                                    class="form-control @error('sale_date') is-invalid @enderror" required>
                                @error('sale_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="series" class="form-label">Series</label>

                                <input type="text" id="series" name="series" value="{{ old('series') }}"
                                    class="form-control @error('series') is-invalid @enderror" required>
                                @error('series')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>

                                <input type="text" id="type" name="type" value="{{ old('type') }}"
                                    class="form-control @error('type') is-invalid @enderror" required>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
    </main>

@endsection
