@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h1 class="text-center text-muted mb-5">{{$book->name}}</h1>
                <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="card mb-3">
                                <div class="div card-body">
                                    <p class="card-text text-muted">{{$book->description}}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Author: {{$book->author}}</li>
                                    <li class="list-group-item"><h5><span class="badge bg-primary">$ {{$book->price}}</span></h5></li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection