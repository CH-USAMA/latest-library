<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Note::all();
        return view( 'note.list',['noteslist'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function notecreate()
    {
        return view(view: 'note.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $note = new Note();
        $note->title = $request->title;
        $note->date = $request->date;
        $note->content = $request->content;
        $note->save();
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
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(note $note)
    {
        //
    }
}
