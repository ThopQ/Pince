{{-- Extends Default Master Layout --}}
@extends('layouts.master')

{{-- Title name --}}
@section('title', 'Add genre')

@section('content')

<form method="POST" action="{{action('GenreController@store')}}">
    @csrf

    <div class="row">
        <div class="col">
            <h1 class="font-weight-bold">Add genre</h1>
        </div>
        <div class="col text-right">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>

    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error:</strong> {{ $error }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endforeach
    @endif

    <div class="card pt-2 pb-2">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Komödie" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Ein lustiger Film"
                    required rows="3"></textarea>
            </div>
        </div>
    </div>
</form>

@endsection