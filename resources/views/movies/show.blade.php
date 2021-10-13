@extends('layouts.main')

@section('title', $movie->title)

@section('content')
    <section id="movie-details" class="container">

        <h1 class="text-center py-5">Movie Details</h1>

        <div class="card">
            <h5 class="card-header">{{$movie->title}}</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <img class="img-fluid" src="{{$movie->poster_path}}" alt="{{$movie->title}}">
                    </div>
                    <div class="col-10">
                        <p class="card-text mb-5">{{$movie->overview}}</p>

                        <h6 class="mb-5">{{$movie->genres}}</h6>
                        <p>Release date: {{$movie->date_release}}</p>
                    </div>

                </div>
              
            
              <a href="{{route('movies.index')}}" class="btn btn-primary mt-5">Back</a>
            </div>
          </div>

        

    </section>

    
@endsection
