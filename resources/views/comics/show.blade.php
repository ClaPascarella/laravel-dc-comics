@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-0">
            <img src="{{ $comic->thumb }}" class="w-100" style="aspect-ratio: 16/9;" />
        </div>
        <div class="col-12 p-4">
            <h2>{{ $comic->title }}</h2>
            <p>Prezzo {{ $comic->series}} </p>
            <p>{{ $comic->description }}</p>
            <a href="https://www.panini.it/shp_ita_it/fumetti-libri-riviste/dc.html" class="btn btn-primary">Compralo per
                {{ $comic->price }}€</a>
        </div>
    </div>
</div>
@endsection