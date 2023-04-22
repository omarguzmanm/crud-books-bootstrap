@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h1 class="text-center text-muted mb-5">Books</h1>

                <div class="d-grid gap-2 mb-4">
                    <a href="{{route('books.create')}}" class="btn btn-primary text-light">New Book</a>
                </div>

                <div class="row">
                    @foreach ($books as $book)
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <div class="div card-body">
                                    <h5 class="card-title text-center mb-3">
                                        <a href="{{route('books.show', $book->id)}}" class="link-danger">{{$book->name}}</a>
                                    </h5>
                                    <p class="card-text text-muted">{{$book->description}}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Author: {{$book->author}}</li>
                                    <li class="list-group-item"><h5><span class="badge bg-primary">$ {{$book->price}}</span></h5></li>
                                </ul>
                                <div class="card-body d-grid gap-2 col-10 mx-auto">
                                    <a href="{{route('books.edit', $book->id)}}" class="btn btn-primary text-light">Edit</a>
                                    @include('books.delete')
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection