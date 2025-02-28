<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = [
        'question_text'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function assignment()
    {
        return $this->hasMany(Assignment::class);
    }

    public function assignmentQuestions()
    {
        return $this->hasMany(assignmentQuestions::class);
    }
}
