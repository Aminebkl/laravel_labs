@extends('layouts.index')

@section('content')

    <div class="container">
        <h2 class="mt-3">Edit caroussel</h2>
        <form method="POST" action={{ route("caroussel.update", $caroussel->id) }}>
            @csrf
            @method('PUT')
            <label class="mt-2" for="logo">
               Logo : 
            </label>
            <div class="form-group">
                <input type="file" class="form-control" value={{ $caroussel->logo }}   name="logo">
            </div>

            <label class="mt-2" for="description">
                description :
            </label>
            <div class="form-group">
                <input type="text" class="form-control" value={{ $caroussel->description }}  name="description">
            </div>
            
            <button type="submit" class="btn btn-primary mt-5 text-light">Submit</button>

        </form>
    </div>


@endsection