@extends('layouts.app')

@section('title', 'Games')

@section('content')
    <main>
        <div id="jumbo">
        </div>
        <div class="container py-5">
            <div class="label text-uppercase fw-bold">Games</div>
            <section id="games" class="container">
                <div class="row row-gap-3">
                    @foreach ($games as $key => $game)
                        <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                            <a href="{{ route('games.show', $key) }}">
                                <div class="card-games">

                                    <div class="img-box mb-2">
                                        <img src="{{ $game['img_icon_url'] }}" alt="{{ $game['name'] }}">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="text-uppercase mb-5">{{ $game['name'] }}</h6>
                                    </div>

                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="text-center">
                        <button class="button btn text-uppercase fw-bold">Load More</button>
                    </div>
                </div>
            </section>
        </div>

    </main>
    @include('partials.resources')

@endsection
