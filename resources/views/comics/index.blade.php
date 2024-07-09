@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Sfoglia i Fumetti</h1>

        </div>
    </div>

    <div class="row">
        @foreach ($catalog as $fumetto)
        <div class="col-3 py-3">
            <div class="card h-100">
                <img src="{{ $fumetto->thumb}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $fumetto->title }}, {{ $fumetto->sale_date }}</h5>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('comics.show', $fumetto->id) }}" class="btn btn-success">Vai ai dettagli</a>
                    <a href="{{ route('comics.edit', $fumetto->id) }}" class="btn btn-danger">Modifica</a>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection