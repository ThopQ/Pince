{{-- Extends Default Master Layout --}}
@extends('layouts.master')

{{-- Title name --}}
@section('title', 'Movies')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="font-weight-bold">All movies</h1>
    </div>
    <div class="col text-right">
        <a class="btn btn-primary" href="/movies/create" role="button">Create</a>
    </div>
</div>

@foreach ($movies as $movie)
<div class="card mb-4">
    <div class="card-body {{ $movie->steelbook == 1 ? 'steelbook' : '' }}">
        <div class="row">
            <div class="col-md-2">
                @if ($movie->image_url)
                <img src="{{ $movie->image_url }}" class="img-fluid" alt="{{ $movie->name }}_image">
                @else
                <p class="text-danger font-weight-bold">No image</p>
                @endif
            </div>
            <div class="col-md-10">
                <h5 class="card-title"><span class="font-weight-bold">{{ $movie->name }}</span> ({{ $movie->year }})
                </h5>
                <h6 class="card-subtitle mb-4 text-muted">FSK: {{ $movie->fsk }} | Directed by
                    {{ $movie->director->name }}
                </h6>
                <p class="card-text mb-2">
                    {{ $movie->description }}
                </p>
            </div>
        </div>
    </div>
    <div class="card-footer text-muted">
        <div class="row">
            <div class="col-md-6">
                Actors:
                @foreach ($movie->actors as $actor)
                <span class="badge badge-secondary">{{ $actor->name }}</span>
                @endforeach
            </div>
            <div class="col-md-6">
                Genres:
                @foreach ($movie->genres as $genre)
                <span class="badge badge-secondary">{{ $genre->name }}</span>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endforeach

@endsection