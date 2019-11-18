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
        <a class="btn btn-primary" href="/directors/create" role="button">Neu</a>
    </div>
</div>

@foreach ($directors as $director)
<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">{{ $director->name }}</h5>
    </div>
</div>
@endforeach

@endsection