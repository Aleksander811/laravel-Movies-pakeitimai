@extends('main')
@section('content')
    <h1 class="mt-4">Pridėti filmą</h1>
    @include('_partials/errors')
    <form action="/storeMovie" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-1">
            <input type="text" name="title" class="form-control" placeholder="Filmo pavadinimas">
        </div>
        <div class="form-group m-1">
        <select name="category" class="form-control">
                <option selected disabled>Pasirinkite kategorija</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group m-1">
            <input type="text" name="imdb" class="form-control" placeholder="IMDB reitingas">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="director" placeholder="Režisierius">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="created" placeholder="Sukurimo data">
        </div>
        <div class="form-group m-1">
            <textarea name="description" placeholder="Aprašymas" class="form-control"></textarea>
        </div>
        <div class="div-group m-1">
            <label>Plakatas</label>
            <input type="file" name="poster" class="form-control">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </div>
    </form>
@endsection
