@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Modifica: {{ $comic->name }}</h1>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            {{-- Questo form non carica una generica rotta "store" ma ha bisogno dell'id del gioco da aggiornare --}}
            <form method="POST" action="{{ route('comics.update', $comic->id) }}">
                @method('PUT') {{-- v. slide da 32 a 35 --}}
                @csrf
                <div class="mb-3">
                    <label class="form-label">title</label>
                    <input type="text" class="form-control" name="name" required value="{{ old('name') ?? $comic->name }}">
                    @error('title')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">description</label>
                    <textarea type="text" class="form-control" name="description" required>{{ old('description') ?? $comic->description }}</textarea>
                    @error('description')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">price</label>
                    <input type="number" step="0.01" min="0.99" max="999.99" class="form-control" name="price" required value="{{ old('price') ?? $comic->price }}">
                    @error('price')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">sale date</label>
                    <input type="number" min="1980" max="2024" class="form-control" name="release_year" required value="{{ old('release_year') ?? $comic->release_year }}">
                    @error('sale_date')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">thumb</label>
                    <input type="text" class="form-control" name="cover_image" required value="{{ old('cover_image') ?? $comic->cover_image }}">
                    @error('type')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">vote</label>
                    <input type="number" min="0" max="10" class="form-control" name="vote" required value="{{ old('vote') ?? $comic->vote }}">
                    @error('vote')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection