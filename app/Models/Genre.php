<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'genre_name'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function book()
    {
        return $this->belongsToMany(Book::class);
    }
}
