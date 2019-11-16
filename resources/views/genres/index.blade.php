{{-- Extends Default Master Layout --}}
@extends('layouts.master')

{{-- Title name --}}
@section('title', 'Genres')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="font-weight-bold">Alle Genres</h1>
    </div>
    <div class="col text-right">
        <a class="btn btn-primary" href="/genres/create" role="button">NEU</a>
    </div>
</div>

<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title mb-4">Thriller</h5>

        <p class="card-text">
            Some quick example text to build on the card title and make up the bulk of the card's
            content.
        </p>
    </div>
</div>

@endsection