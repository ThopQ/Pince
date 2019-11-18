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
        <a class="btn btn-primary" href="/genres/create" role="button">Neu</a>
    </div>
</div>

@foreach ($genres as $genre)
<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title mb-4">{{ $genre->name }}</h5>

        <p class="card-text">
            {{ $genre->description }}
        </p>
    </div>
</div>
@endforeach

@endsection