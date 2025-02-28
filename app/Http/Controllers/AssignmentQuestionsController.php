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

    public function viewassignmentquestions($id)
    {
        $assignmentquestions = AssignmentQuestions::where('assignment_id',$id)->with('question')->get();     
        return view( 'assignmentquestions.form',['assignmentquestionslist'=>$assignmentquestions]);

    }

    public function updateanswerquestions(Request $request)
    {
        dd($request);

    }
}
