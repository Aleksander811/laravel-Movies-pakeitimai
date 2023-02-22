@extends('main')
@section('content')
    <h1 class="mt-4">Suraskite filma</h1>
    @include('_partials/errors')
    <form action="/searchMovie" method="post">
        @csrf
        <div class="form-group m-1">
            <input type="text" name="search" class="form-control" placeholder="Įveskite filmo pavadinimą">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Ieškoti</button>
        </div>
        <div>
            @if($movies->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($movies->all() as $movie)
                <li>{{ $movie->title }}</li>
            @endforeach
        </ul>
    </div>
        @endif
        </div>
    </form>
@endsection
