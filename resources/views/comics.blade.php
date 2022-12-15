@extends('layouts.app')

@section('content')
    <div class="title justify-content-center d-flex align-items-center">
        <div class="text">
            <h1>SONO LA PAGINA COMICS</h1>
        </div>
    </div>
    <div class="containercard">
        <div class="container">
            <div class="row row-cols-6">
                @foreach ($cards as $card)
                    <div class="col my-3">
                        <div class="image">
                            <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                        </div>
                        <div class="text">
                            <h3>{{ $card['title'] }}</h3>
                            <p>{{ $card['price'] }}</p>
                            <p>{{ $card['series'] }}</p>
                            <span>
                                {{ $card['type'] }}
                            </span>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
