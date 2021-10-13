@extends('layouts.main')

@section('title', 'Movies')

@section('content')
    <section id="movies-list" class="container">

        <h1 class="text-center py-5">Movies List</h1>

        <div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Genres</th>
                    <th scope="col">Overview</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($movies as $movie)
                    <tr>
                        <th scope="row">{{ $movie->id }}</th>
                        <td><a href="{{route('movies.show', $movie->id)}}">{{ $movie->title }}
                        <td>{{ $movie->genres }}</td>
                        <td>{{ $movie->overview }}</td>
                      </tr>
                        
                    @endforeach
                  
                </tbody>
              </table>
        </div>

        

        <div class="text-center mt-5">
            <a class="btn btn-primary" href="{{route('movies.create')}}">Crea nuovo film</a>
        </div>
    

    </section>
    
@endsection
