<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'author', 'publisher', 'cover', 'price', 'weight', 'stock', 'status'
    ];
}
