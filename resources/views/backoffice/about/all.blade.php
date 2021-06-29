@extends('layouts.index')

@section('content')

    <section class="container mr-5 section text-white">
        
        <a class="btn btn-dark text-white my-2" href="/about/create">Create</a>

        @if (session("message"))
            <div class="alert alert-success">
                {{ session("message") }}
            </div>

        @endif

        <table class="table text-white">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">titre</th>
                <th scope="col">description1</th>
                <th scope="col">description2</th>
                <th scope="col">bouton</th>
                <th scope="col">image</th>
                <th scope="col">video</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="col-6">
                @foreach ($abouts as $about)
                    <tr>
                        <th scope="row">{{ $about->id }}</th>
                        <td> {{ $about->titre }}</a></td>
                        <td>{{ $about->description1 }}</td>
                        <td>{{ $about->description2 }}</td>
                        <td>{{ $about->bouton }}</td>
                        <td>{{ $about->image }}</td>
                        <td>{{ $about->video }}</td>
                        <td>
                            <div class="d-flex">
                                <form action="/about/{{ $about->id }}/download" method="POST">
                                    @csrf
                                    <button class="btn btn-dark text-white mx-2" type="submit">Download</button>
                                </form>
                                <a class="btn btn-dark text-white" href="{{route('about.edit',$about->id) }}">Edit</a>
                                <form action="{{ route('about.destroy',$about->id) }}" method="POST">
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