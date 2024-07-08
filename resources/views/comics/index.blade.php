@extends('layouts.app')

@section('content')
<h1>FUMETTO</h1>
@foreach ($catalog as $fumetto)
<p>
    <a href="{{ route("comics.show", $fumetto->id) }}">{{ $fumetto->title}}</a>
</p>
@endforeach

@endsection