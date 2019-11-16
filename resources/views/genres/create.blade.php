{{-- Extends Default Master Layout --}}
@extends('layouts.master')

{{-- Title name --}}
@section('title', 'Neues Genre')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="font-weight-bold">Genre erstellen</h1>
    </div>
    <div class="col text-right">
        <button type="submit" class="btn btn-primary">Speichern</button>
    </div>
</div>
<form action="{{ route('genres.store')}}">
    @csrf

    <div class="card pt-2 pb-2">
        <div class="card-body">
            <div class="form-group">
                <label for="genreName">Name</label>
                <input type="text" class="form-control" id="genreName" name="genreName" placeholder="Komödie">
            </div>

            <div class="form-group">
                <label for="genreDescription">Beschreibung</label>
                <input type="text" class="form-control" id="genreDescription" name="genreDescription"
                    placeholder="Ein lustiger Film">
            </div>
        </div>
    </div>
</form>

@endsection