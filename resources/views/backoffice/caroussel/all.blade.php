@extends('layouts.index')

@section('content')

    <section class="container mr-5 section text-white">
        
        <a class="btn btn-dark text-white my-2" href="/caroussel/create">Create</a>

        @if (session("message"))
            <div class="alert alert-success">
                {{ session("message") }}
            </div>

        @endif

        <table class="table text-white">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="col-6">
                @foreach ($caroussels as $caroussel)
                    <tr>
                        <th scope="row">{{ $caroussel->id }}</th>
                        <td> {{ $caroussel->logo }}</a></td>
                        <td>{{ $caroussel->description }}</td>
                        <td>
                            <div class="d-flex">
                                <form action="/caroussel/{{ $caroussel->id }}/download" method="POST">
                                    @csrf
                                    <button class="btn btn-dark text-white mx-2" type="submit">Download</button>
                                </form>
                                <a class="btn btn-dark text-white" href="{{route('caroussel.edit',$caroussel->id) }}">Edit</a>
                                <form action="{{ route('caroussel.destroy',$caroussel->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-white mx-2" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>           
    </section>


@endsection