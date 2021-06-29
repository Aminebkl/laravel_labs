@extends('layouts.index')

@section('content')

    <div class="container">
        <h2 class="mt-3">Edit carousselitem</h2>
        <form method="POST" action="{{ route("caroussel_items.update", $carousselItem->id) }}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <label class="mt-2" for="image">
               Image : 
            </label>
            <div class="form-group">
                <input type="file" class="form-control" value={{ $carousselItem->image }}   name="image">
            </div>
            <button type="submit" class="btn btn-primary mt-5 text-light">Submit</button>

        </form>
    </div>
@endsection