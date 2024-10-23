@extends('layouts.app')

@section('page-title', 'Shop Show')

@section('main-content')

    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1> {{ $article['nome'] }} </h1>
            </div>
            <div class="row justify-content-around">
                <div class="col-12 card m-2">
                    <ul>
                        <li>
                            Prodotto: {{ $article['nome'] }}
                        </li>
                        <li>
                            Anno di riferimnto: {{ $article['anno'] }}
                        </li>
                        <li>
                            Taglia più venduta: {{ $article['taglia_maggiore'] }}
                        </li>
                        <li>
                            Prezzo: <span class="value"> {{ $article['prezzo'] }} </span>
                        </li>
                        <li>
                            <img src="{{ $article['immagine'] }}" alt="immagine">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
