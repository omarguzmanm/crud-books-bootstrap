{!! Form::model($book, ['route' => [$book->url(), $book->id], 'method' => $book->method()]) !!}

    <div class="mb-3">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name', 'onkeyup' =>  'createSlug(this.value)']) !!}
    </div>

    <div class="mb-3">
        {!! Form::label('slug', 'Slug') !!}
        {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug']) !!}
    </div>

    <div class="mb-3">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
    </div>


    <div class="mb-3">
        {!! Form::label('author', 'Author') !!}
        {!! Form::text('author', null, ['class' => 'form-control', 'placeholder' => 'Author']) !!}
    </div>


    <div class="mb-3">
        {!! Form::label('price', 'Price') !!}
        {!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Price']) !!}
    </div>


    <div class="mb-3">
        {!! Form::submit('Save', ['class' => 'btn btn-primary text-light']) !!}
    </div>


{!! Form::close() !!}