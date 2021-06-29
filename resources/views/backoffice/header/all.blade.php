@extends('layouts.index')

@section('content')

    <section class="container mr-5 section text-white">
        

        @if (session("message"))
            <div class="alert alert-success">
                {{ session("message") }}
            </div>

        @endif

        <table class="table text-white">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">logo</th>
                <th scope="col">home</th>
                <th scope="col">service</th>
                <th scope="col">blog</th>
                <th scope="col">contact</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="col-6">
                @foreach ($headers as $header)
                    <tr>
                        <th scope="row">{{ $header->id }}</th>
                        <td>{{ $header->logo }}</td>
                        <td> {{ $header->item1 }}</a></td>
                        <td>{{ $header->item2 }}</td>
                        <td>{{ $header->item3 }}</td>
                        <td>{{ $header->item4 }}</td>
                        <td>
                            <div class="d-flex">
                                <form action="/header/{{ $header->id }}/download" method="POST">
                                    @csrf
                                </form>
                                <a class="btn btn-dark text-white" href="{{route('header.edit',$header->id) }}">Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>           
    </section>


@endsection