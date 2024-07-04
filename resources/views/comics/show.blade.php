@extends('layouts.app')

@section('content')

<h2>{{ $comic->title }}</h2>
<div>{{ $comic->price}}</div>

@endsection