@extends('main')
@section('content')
    <h1 class="mt-4 align-center">{{ $movie->title }}</h1>
    <p>{{ $movie->description }}</p>
    <img src="{{ asset('/storage/'.$movie->poster) }}" alt="" >
    <h3>Kita informacija apie filma:</h3>
    <ul>
        <li>Rezisierius:{{ $movie->director }}</li>
        <li>IMDB reitingas:{{ $movie->imd }}</li>
        <li>Filmas sukurtas:{{ $movie->created }}</li>
    </ul>
    <h4>Veiksmai</h4>
    <ul>
        <li><a href="/movie/edit/{{ $movie->id }}">Redaguoti</a></li>
        <li><a href="/movie/delete/{{ $movie->id }}">Šalinti</a></li>
    </ul>
@endsection
