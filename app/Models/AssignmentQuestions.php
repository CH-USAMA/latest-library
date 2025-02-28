<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignmentQuestions extends Model
{
    protected $table = 'assignments_questions';

    protected $fillable = [
        'assignment_id',
        'question_id',
        'answer_content'
    ];
    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    public function question()
    {
        return $this->belongsTo(question::class);
    }
}
