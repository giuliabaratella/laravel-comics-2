@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <main>
        <div id="jumbo">
        </div>
        <div class="container py-5">
            <div class="label text-uppercase fw-bold">Most Popular comics</div>
            <div id="most-popular-comics">
                <div class="row row-gap-3">
                    @foreach ($comics as $comic)
                        <div class="col-12 col-md-4">
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <div class="card-comics">
                                    <div class="img-box mb-3">
                                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="text-uppercase mb-5">
                                            {{ $comic->title }}
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="text-center">
                        <button class="button btn text-uppercase fw-bold">
                            <a href="{{ route('comics.index') }}" class="text-white">All The Current Series</a>

                        </button>
                    </div>
                </div>
            </div>

        </div>

    </main>
    @include('partials.resources')

@endsection
