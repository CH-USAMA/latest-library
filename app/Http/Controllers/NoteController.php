<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\user;
use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\ClassNote;


class NoteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Note::all();
        return view( 'note.list',['noteslist'=>$data]);
    }

    public function viewstudentnotes($id)
    {
        $data = Note::all(); //change query with id
        return view( 'note.list',['noteslist'=>$data,'selectedid'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function notecreate()
    {
        $data = User::all();
        return view( 'note.form',['userslist'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function notestore(Request $request)
    {
        // dd($request->all());
        $note = new Note();
        $note->title = $request->title;
        $note->date = $request->date;
        $note->objectives_comments = $request->objectives_comments;
        $note->reading_ability_progress = $request->reading_ability_progress;
        $note->vipers_progress = $request->vipers_progress;
        $note->class_objectives = $request->class_objectives;
        $note->teacher_id = $request->teacher_id;
        $note->student_id = $request->student_id;
        $note->class_notes_id = $request->note_id;
        $note->assignment_id = $request->assignment_id;
        $note->student_class_id = $request->class_id;


        $note->save();
        //$note->user()->attach($request->id);
        return redirect()->route('notes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editnote($id)
    {
        $note = Note::find($id);
        return view('note.form',['note'=>$note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateNote(Request $request)
    {
        $request->validate([
            'content' => ['nullable']
        ]);
        $id = $request->id;
        $note = Note::find(id: $id);
        //$note->update($request->all());
        //dd($note);
        //$note->update($request->all());
        $note->update($request->only('title', 'content'));
        //$note->update($request->all()->except(['title', 'content']));
        //$note->update($request->title);
        //$note->update($request->all());
        //User::where($id)->update($request->User);
        return redirect()->route('notes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deletenote($id)
    {
        Note::destroy($id);
        return redirect()->route('notes');
    }


    public function getNotes($classId)
    {
        $notes = ClassNote::where('form_class_id', $classId)->get();
        return response()->json($notes);
    }

    public function getAssignments($studentId)
    {
        $assignments = Assignment::where('student_id', $studentId)->get();
        return response()->json($assignments);
    }

    public function getNoteDetails($noteId)
    {
        $note = ClassNote::find($noteId);
        return response()->json($note);
    }

    public function getAssignmentDetails($assignmentId)
    {
        $assignment = Assignment::find($assignmentId);
        return response()->json($assignment);
    }
}
