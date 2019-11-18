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
        <a class="btn btn-primary" href="/actors/create" role="button">Neu</a>
    </div>
</div>

@foreach ($actors as $actor)
<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">{{ $actor->name }}</h5>
    </div>
</div>
@endforeach

@endsection