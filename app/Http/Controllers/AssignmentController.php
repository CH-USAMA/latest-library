<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\AssignmentQuestions;
use App\Models\User;

use App\Models\Book;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Assignment::with('student','teacher','book')->get();
        //dd($data);
        return view('assignments.list',['assignmentslist'=>$data]);
    }

    public function studentassignment($id)
{
    $data = Assignment::with('student', 'teacher', 'book')->where('student_id', $id)->get(); 
    //dd($data);
    return view('student_assignment.list', ['assignmentslist' => $data]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function createassignment()
    {
        //$questions = Question::with('Book')->where('book_id', $id)->get();
        $books = Book::all();
        $users = User::all();
        return view('assignments.form',['bookslist'=>$books, 'userslist'=>$users]);
    }

    public function selectbook()
    {
        $books = Book::all();
        //return view('students.list',['userslist'=>$data]);
        return view('assignments.book',['bookslist'=>$books]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeassignment(Request $request)
    {
        //dd($request);

        $assignment = new Assignment();
        $assignment->name = $request->name;
        $assignment->book_id = $request->book_id;
        $assignment->student_id = $request->student_id;
        $assignment->teacher_id = $request->teacher_id;
        $assignment->status = $request->status;
        $assignment->save();
        foreach($request->questionlist as $question)
        {
            $AssignmentQuestions = new AssignmentQuestions();
            $AssignmentQuestions->assignment_id = $assignment->id;
            $AssignmentQuestions->question_id = $question;
            //$AssignmentQuestions->question_id->saveMany($request->questionlist);
            //$assignment->AssignmentQuestions()->saveMany($request->questionlist);
            //$assignment->AssignmentQuestions()->save($request->questionlist);
            $AssignmentQuestions->save();
        }
        //$AssignmentQuestions->save();
        return redirect()->route('assignments');
    }

    /**
     * Display the specified resource.
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteassignment($id)
    {
        Assignment::destroy($id);
        return redirect()->route('assignments');
    }
}
