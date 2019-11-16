{{-- Extends Default Master Layout --}}
@extends('layouts.master')

{{-- Title name --}}
@section('title', 'Neuer Regisseur')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="font-weight-bold">Regisseur erstellen</h1>
    </div>
    <div class="col text-right">
        <button type="submit" class="btn btn-primary">Speichern</button>
    </div>
</div>
<form action="{{ route('directors.store')}}">
    @csrf

    <div class="card pt-2 pb-2">
        <div class="card-body">
            <div class="form-group">
                <label for="directorName">Name</label>
                <input type="text" class="form-control" id="directorName" name="directorName"
                    placeholder="Steven Spielberg">
            </div>
        </div>
    </div>
</form>


@endsection