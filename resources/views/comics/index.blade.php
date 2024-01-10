@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <main>
        <div id="jumbo">
        </div>
        <div class="container py-5">
            <div class="label text-uppercase fw-bold">Current Series</div>
            <section id="current-series" class="container">

                <div class="d-flex justify-content-end">
                    <div class="py-5">
                        <form action="{{ route('comics.index') }}" method="GET">
                            @csrf
                            <div class="input-group">
                                <input type="search" name="search" id="search" placeholder="Search bty title"
                                    aria-label="Search" class="form-control">
                                <button type="submit" class="btn btn-primary text-uppercase fw-bold ">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

                @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <div class="row row-gap-3">
                    @foreach ($comics as $comic)
                        <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <div class="card-comics">

                                    <div class="img-box mb-3">
                                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="text-uppercase mb-5">{{ $comic->title }}</h6>
                                    </div>

                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="text-center">
                        <button class="button btn text-uppercase fw-bold">
                            <a class="text-white" href="{{ route('comics.create') }}">Add new Comic</a>
                        </button>
                    </div>
                </div>
            </section>
        </div>

    </main>
    @include('partials.resources')

@endsection
