@extends('layouts.index')

@section('content')

    <div class="container">
        <h2 class="mt-3">Edit testimonial</h2>
        <form method="POST" action={{ route("testimonial.update", $testimonial->id) }} enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label class="mt-2" for="image">
               image : 
            </label>
            <div class="form-group">
                <input type="file" class="form-control" value={{ $testimonial->image }}   name="image">
            </div>

            <label class="mt-2" for="titre">
                Titre :
            </label>
            <div class="form-group">
                <input type="text" class="form-control" value={{ $testimonial->titre }}  name="titre">
            </div>

            <button type="submit" class="btn btn-primary mt-5 text-light">Submit</button>

        </form>
    </div>


@endsection