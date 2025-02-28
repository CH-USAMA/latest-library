<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\AssignmentQuestions;

class AssignmentQuestionsController extends Controller
{
    public function createassignmentquestions($book_id)
    { 
        $questions = Question::where('book_id', $book_id)->get();     
        return response()->json(['questions' => $questions]);
    }

    public function storeassignmentquestions($questionslist,$assignmentid)
    { 
        dd($questionslist);
        $AssignmentQuestions = new AssignmentQuestions();
        $AssignmentQuestions->assignmentid = $assignmentid;
        $AssignmentQuestions->question_id->attach($questionslist->question_id);
        $AssignmentQuestions->save();
        return redirect()->route('books');
    }
}
