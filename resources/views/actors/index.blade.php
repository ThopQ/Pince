{{-- Extends Default Master Layout --}}
@extends('layouts.master')

{{-- Title name --}}
@section('title', 'Actors')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="font-weight-bold">All actors</h1>
    </div>
    <div class="col text-right">
        <a class="btn btn-primary" href="/actors/create" role="button">Create</a>
    </div>
</div>

<div class="card-columns">
    @foreach ($actors as $actor)
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $actor->name }}</h5>
        </div>
    </div>
    @endforeach
</div>

@endsection