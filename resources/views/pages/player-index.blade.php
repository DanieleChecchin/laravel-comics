@extends('layouts.app')

@section('page-title', 'Player Index')

@section('main-content')

    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1> Juventus Player index page</h1>
            </div>
            <div class="row justify-content-around">
                @foreach ($players as $player)
                    <div class="col-4 card m-2">
                        <ul>
                            <li>
                                Nome: {{ $player['nome'] }}
                            </li>
                            <li>
                                Cognome: {{ $player['cognome'] }}
                            </li>
                            <li>
                                Ruolo: {{ $player['ruolo'] }}
                            </li>
                            <li>
                                Valore di mercato: {{ $player['valore_mercato'] }}
                            </li>
                            <li>
                                URL immagine: <img src="{{ $player['immagine'] }}" alt="immagine">
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
