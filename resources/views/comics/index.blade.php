@extends('layouts.app')

@section('content')
<h1>FUMETTO</h1>
@foreach ($catalog as $fumetto)
<p>{{ $fumetto->title}}</p>
@endforeach

@endsection