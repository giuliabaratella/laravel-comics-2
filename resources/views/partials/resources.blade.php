@php
    $buy = config('db.buyComics');
@endphp

<section id="resources">
    <div class="container">
        <ul class="d-flex justify-content-evenly align-items-center row-gap-4 column-gap-4 m-0 py-5 flex-wrap">
            @foreach ($buy as $el)
                <li>
                    <a href="#">
                        <div class="box d-flex align-items-center">
                            <div class="pe-2" id="img-box">
                                <img src={{ $el['img'] }} alt={{ $el['text'] }}>
                            </div>
                            <div class="text-white text-uppercase">{{ $el['text'] }}</div>
                        </div>
                    </a>
                </li>
            @endforeach

        </ul>
    </div>
</section>
