<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\User;
use App\Models\Question;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$data = Question::with('Book')->get();
        $data = Assignment::all();
        //dd($data);
        return view('assignments.list',['assignmentslist'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createassignment()
    {
        $questions = Question::all();
        $users = User::all();             //Possible to remove as you might only need id
        return view('assignments.form',['questionslist'=>$questions, 'userslist'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeassignment(Request $request)
    {
        dd(vars: $request);
        $assignment = new Question();
        $assignment->question_id = $request->question_id;
        $assignment->student_id = $request->student_id;
        $assignment->teacher_id = $request->teacher_id;
        $assignment->answer_content = $request->answer_content;
        $assignment->submitted = $request->submitted;
        $assignment->feedback = $request->feedback;
        $assignment->save();
        //$note->user()->attach($request->id);
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
    public function destroy($id)
    {
        Assignment::destroy($id);
        return redirect()->route('assignments');
    }
}
