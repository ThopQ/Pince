{{-- Extends Default Master Layout --}}
@extends('layouts.master')

{{-- Title name --}}
@section('title', 'Schauspieler')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="font-weight-bold">Alle Schauspieler</h1>
    </div>
    <div class="col text-right">
        <a class="btn btn-primary" href="/actors/create" role="button">NEU</a>
    </div>
</div>

<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">Leonardo diCaprio</h5>
    </div>
</div>

@endsection