@extends('layouts.main')

@section('title', 'Add Movie')

@section('content')
    <section id="add-form" class="container">
        <h1 class="text-center py-5">Add Movie</h1>

        <form method='POST' action="{{ route('movies.store') }}">
            @csrf
        
            <div class="row">
                <div class="col-4 mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
        
                <div class="col-4 mb-3">
                      <label for="genres" class="form-label">Genres</label>
                      <input type="text" class="form-control" id="genres" name="genres" required>
                </div>

                <div class="col-4 mb-3">
                    <label for="date_release" class="form-label">Release Date</label>
                    <input type="text" class="form-control" id="date_release" name="date_release">
              </div>
            </div>

            <div class="mb-3">
                <label for="poster_path" class="form-label">Poster Url</label>
                <input type="text" class="form-control" id="poster_path" name="poster_path">
            </div>
            
            <div class="mb-3">
                <label for="overview" class="form-label">Overview</label>
                <textarea class="form-control"  id="overview" name="overview" style="height: 100px"></textarea>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <a href="{{route('movies.index')}}" class="btn btn-secondary me-3">Back</a>
                <button class="btn btn-outline-danger me-3" type="reset">Reset</button>
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </form>


    </section>





@endsection