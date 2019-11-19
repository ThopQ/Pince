{{-- Extends Default Master Layout --}}
@extends('layouts.master')

{{-- Title name --}}
@section('title', 'Add movie')

@section('content')

<form method="POST" action="{{action('MovieController@store')}}">
    @csrf

    <div class="row">
        <div class="col">
            <h1 class="font-weight-bold">Add movie</h1>
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
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="The Prestige"
                            required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="description">Year</label>
                        <input type="number" class="form-control" id="year" name="year" placeholder="2006" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"
                            placeholder="In 1878, two young stage magicians clash in a darkened salon during the course of a fraudulent seance. From this moment on, their lives become webs of deceit and exposure, secrets and revelations, as they feud to outwit and destroy one another. Their rivalry takes them both to the peak of their careers, but with terrible consequences."
                            required></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="fsk">FSK</label>
                        <select class="form-control" id="fsk" name="fsk">
                            <option value="0" selected>0</option>
                            <option value="6">6</option>
                            <option value="12">12</option>
                            <option value="16">16</option>
                            <option value="18">18+</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="director_id">Director</label>
                        <select class="form-control" id="director_id" name="director_id">
                            <option value="" selected disabled hidden>Choose Director</option>
                            @foreach ($directors as $director)
                            <option value="{{ $director->id }}">{{ $director->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="image_url">Cover-Image</label>
                        <input type="url" class="form-control" id="image_url" name="image_url"
                            aria-describedby="urlHelp" placeholder="https://www.website.com/image">
                        <small id="urlHelp" class="form-text text-muted">Optional</small>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col">
                    <p>Choose actors</p>
                    @if ($actors->count() > 0)
                    @foreach ($actors as $actor)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $actor->id }}"
                            id="actor{{ $actor->id }}" name="actor[]">
                        <label class="form-check-label" for="actor{{ $actor->id }}">
                            {{ $actor->name }}
                        </label>
                    </div>
                    @endforeach
                    @else
                    <p class="text-danger font-weight-bold">no actors</p>
                    <a href="/actors/create">add one</a>
                    @endif
                </div>
                <div class="col">
                    <p>Choose genres</p>
                    @if ($genres->count() > 0)
                    @foreach ($genres as $genre)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $genre->id }}"
                            id="genre{{ $genre->id }}" name="genre[]">
                        <label class="form-check-label" for="genre{{ $genre->id }}">
                            {{ $genre->name }}
                        </label>
                    </div>
                    @endforeach
                    @else
                    <p class="text-danger font-weight-bold">no genres</p>
                    <a href="/genres/create">add one</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>

@endsection