@php
    $buy = config('db.buyComics');
@endphp

@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <main>
        <div id="jumbo">
        </div>
        <div id="comic-detail">
            <div class="blueline">
                <div class="container">
                    <div class="comic-img">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row mt-5">
                    <div class="col-12 col-lg-8 mb-3">
                        <h1 class="text-uppercase mb-3">{{ $comic->title }}</h1>
                        <div class="price-info row align-items-center mb-3">
                            <div class="price-box col-8 d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="text-green me-1">U:S:Price:</div>
                                    <div>{{ $comic->price }}</div>
                                </div>
                                <div class="text-uppercase text-green">Available</div>
                            </div>
                            <div class="price-box col-4 d-flex justify-content-center align-items-center">
                                <div class="me-3">Check Availability </div>
                                <i class="fa-solid fa-angle-down"></i>
                            </div>

                        </div>
                        <p>{{ $comic->description }}</p>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="mb-3">
                            <h6 class="text-uppercase text-end">Advertisement</h6>
                            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="advertisement">
                        </div>
                    </div>

                </div>

                <div class="d-flex column-gap-4">
                    <button class="button btn btn-primary text-uppercase fw-bold"><a
                            href="{{ route('comics.edit', $comic->id) }}" class="text-white">Update
                            comic</a>
                    </button>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button-danger btn btn-danger text-uppercase fw-bold">Delete
                            comic</button>
                    </form>
                </div>

            </div>
            <div class="specs">
                <div class="container">
                    <div class="row pb-5">
                        <div class="col-12 col-lg-5">
                            <h6 class="border-bottom py-2">
                                Talent
                            </h6>
                            <div class="border-bottom row py-2">
                                <div class="col-4">Art by:</div>
                                <div class="col-8 text-blue">
                                    José Luis Garcìa-Lòpez, Clay MAnn, Rafael Albuquerque, Patrick Gleason
                                </div>

                            </div>
                            <div class="border-bottom row py-2">
                                <div class="col-4">Written by:</div>
                                <div class="col-8 text-blue">
                                    José Luis Garcìa-Lòpez, Clay MAnn, Rafael Albuquerque, Patrick Gleason
                                </div>

                            </div>


                        </div>
                        <div class="col"></div>
                        <div class="col-12 col-lg-5">
                            <h6 class="border-bottom py-2">
                                Specs
                            </h6>
                            <div class="border-bottom row py-2">
                                <div class="col-4">Series:</div>
                                <div class="col-8 text-blue">
                                    {{ $comic->series }}
                                </div>

                            </div>
                            <div class="border-bottom row py-2">
                                <div class="col-4">U.S.Price:</div>
                                <div class="col-8 ">
                                    {{ $comic->price }}
                                </div>

                            </div>
                            <div class="border-bottom row py-2">
                                <div class="col-4">On sale date:</div>
                                <div class="col-8 ">
                                    {{ $comic->sale_date }}
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="buy pb-3">
                        <div class="row">
                            @foreach ($buy as $el)
                                <div class="col p-2 d-flex align-items-center justify-content-center">
                                    <div class="me-2">{{ $el['text'] }}</div>
                                    <div class="img-box">
                                        <img src="/{{ $el['img'] }}" alt={{ $el['text'] }}>
                                    </div>

                                </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
