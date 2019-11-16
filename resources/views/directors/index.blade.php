{{-- Extends Default Master Layout --}}
@extends('layouts.master')

{{-- Title name --}}
@section('title', 'Regisseure')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="font-weight-bold">Alle Regisseure</h1>
    </div>
    <div class="col text-right">
        <a class="btn btn-primary" href="/movies/create" role="button">NEU</a>
    </div>
</div>

<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">Steven Spielberg</h5>
    </div>
</div>
@endsection