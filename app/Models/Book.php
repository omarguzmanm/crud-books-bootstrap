<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function url()
    {
        return $this->id ? 'books.update' : 'books.store';
    }

    public function method()
    {
        return $this->id ? 'PUT' : 'POST';
    }
}


