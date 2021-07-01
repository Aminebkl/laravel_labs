@extends('layouts.index')

@section('content')

    <section class="container mr-5 section text-white">
        
        <a class="btn btn-dark text-white my-2" href="/testimonial/create">Create</a>

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
                <th scope="col">image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="col-6">
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <th scope="row">{{ $testimonial->id }}</th>
                        <td> {{ $testimonial->titre }}</a></td>
                        <td>{{ $testimonial->image }}</td>
                        <td>
                            <div class="d-flex">
                                <form action="/testimonial/{{ $testimonial->id }}/download" method="POST">
                                    @csrf
                                    <button class="btn btn-dark text-white mx-2" type="submit">Download</button>
                                </form>
                                <a class="btn btn-dark text-white" href="{{route('testimonial.edit',$testimonial->id) }}">Edit</a>
                                <form action="{{ route('testimonial.destroy',$testimonial->id) }}" method="POST">
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