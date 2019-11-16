{{-- Extends Default Master Layout --}}
@extends('layouts.master')

{{-- Title name --}}
@section('title', 'Neuer Schauspieler')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="font-weight-bold">Schauspieler erstellen</h1>
    </div>
    <div class="col text-right">
        <button type="submit" class="btn btn-primary">Speichern</button>
    </div>
</div>
<form action="{{ route('actors.store')}}">
    @csrf

    <div class="card pt-2 pb-2">
        <div class="card-body">
            <div class="form-group">
                <label for="actorName">Name</label>
                <input type="text" class="form-control" id="actorName" name="actorName" placeholder="Leonardo diCaprio">
            </div>
        </div>
    </div>
</form>

@endsection