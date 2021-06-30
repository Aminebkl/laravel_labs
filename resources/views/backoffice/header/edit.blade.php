@extends('layouts.index')

@section('content')

    <div class="container">
        <h2 class="mt-3">Edit Header</h2>
        <form method="POST" action={{ route("header.update", $header->id) }} enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label class="mt-2" for="logo">
               Logo : 
            </label>
            <div class="form-group">
                <input type="file" class="form-control" value={{ $header->logo }}   name="logo">
            </div>

            <label class="mt-2" for="item1">
                Home :
            </label>
            <div class="form-group">
                <input type="text" class="form-control" value={{ $header->item1 }}  name="item1">
            </div>

            <label class="mt-2" for="item2">
                Service :
            </label>
            <div class="form-group">
                <input type="text" class="form-control" value={{ $header->item2 }}  name="item2">
            </div>
            <label class="mt-2" for="item3">
                Blog :
            </label>
            <div class="form-group">     
                <input type="text" class="form-control" value={{ $header->item3 }}  name="item3">
            </div>
            <label class="mt-2" for="item4">
                Contact :
            </label>
            <div class="form-group">
                <input type="text" class="form-control" value={{ $header->item4 }} name="item4">                                                                
            </div>
            <button type="submit" class="btn btn-primary mt-5 text-light">Submit</button>

        </form>
    </div>


@endsection