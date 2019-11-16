{{-- Extends Default Master Layout --}}
@extends('layouts.master')

{{-- Title name --}}
@section('title', 'Filme')

@section('content')

<div class="row">
    <div class="col-md-6">
        <h1 class="font-weight-bold">Alle Filme</h1>
    </div>
    <div class="col-md-6 text-right">
        <a class="btn btn-primary" href="/movies/create" role="button">NEU</a>
    </div>
</div>




<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title"><span class="font-weight-bold">Interstellar</span> (2019)</h5>
        <h6 class="card-subtitle mb-4 text-muted">Directed by Christopher Nolan</h6>
        <p class="card-text">
            Some quick example text to build on the card title and make up the bulk of the card's
            content.
        </p>
        <div class="row">
            <div class="col-md-6">Actors: Blablabla, Blablabla</div>
            <div class="col-md-6">Genres: Drama, Sci-Fi</div>
        </div>
    </div>
</div>
@endsection