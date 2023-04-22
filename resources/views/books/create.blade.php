@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h1 class="text-center text-muted mb-5">Create book</h1>
                <div class="col-md-5 mx-auto">
                    @include('books.partials.form')
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script>
        function createSlug(slug){
            //Slug creation
            slug = slug.replace(/\s+/g, '-');
            
            //Add slug
            let input = document.getElementById('slug');
            input.value = slug;
        }
    </script>

@endsection