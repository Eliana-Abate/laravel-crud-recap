@extends('layouts.main')

@section('title', $movie->title)

@section('content')
    <section id="movie-details" class="container">

        <h1 class="text-center py-5">Movie Details</h1>

        <div class="card">
            <h5 class="card-header">{{$movie->title}}</h5>
            <div class="card-body">
              
              <p class="card-text">{{$movie->overview}}</p>
              <a href="{{route('movies.index')}}" class="btn btn-primary">Back</a>
            </div>
          </div>

        

    </section>

    
@endsection
