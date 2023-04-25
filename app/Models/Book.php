<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'year_of_publication',
        'reting',
        'author_id',
        'publisher_id',
        'impression_id',
    ];

    public function findAll()
    {
        return Book::all();
    }
}
