@extends('layouts.index')

@section('content')

    <div class="container">
        <h2 class="mt-3">Edit About</h2>
        <form method="POST" action={{ route("about.update", $about->id) }} enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label class="mt-2" for="image">
               image : 
            </label>
            <div class="form-group">
                <input type="file" class="form-control" value={{ $about->image }}   name="image">
            </div>

            <label class="mt-2" for="description1">
                description 1 :
            </label>
            <div class="form-group">
                <input type="text" class="form-control" value={{ $about->description1 }}  name="description1">
            </div>

            <label class="mt-2" for="description2">
                description 2 :
            </label>
            <div class="form-group">
                <input type="text" class="form-control" value={{ $about->description2 }}  name="description2">
            </div>
            <label class="mt-2" for="titre">
                titre :
            </label>
            <div class="form-group"> 
                <input type="text" class="form-control" value={{ $about->titre }}  name="titre">
            </div>
            <label class="mt-2" for="titre">
                bouton :
            </label>
            <div class="form-group">
                <input type="text" class="form-control" value={{ $about->bouton }} name="bouton">                                                                
            </div>

            <label class="mt-2" for="video">
                video :
            </label>
            <div class="form-group"> 
                <input type="text" class="form-control" value={{ $about->video }}  name="video">
            </div>
            <label class="mt-2" for="video">

            <button type="submit" class="btn btn-primary mt-5 text-light">Submit</button>

        </form>
    </div>


@endsection