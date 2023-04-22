{!! Form::open(['route' => ['books.destroy', $book->id], 'method' => "DELETE"]) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger text-light col-12']) !!}

{!! Form::close() !!}
