<?php

namespace App\Http\Controllers;

use App\Models\FormClass;
use App\Models\User;
use Illuminate\Http\Request;

class FormClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function formclassteacherlist()
    {
        $data = FormClass::with(['teacher', 'substituteteacher'])->get();
        return view('formclasses.list',['formclasseslist'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createformclass()
    {
        $teachers = User::where('role', 'teacher')->get();
        return view('formclasses.form',['teacherslist'=>$teachers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeformclass(Request $request)
    {
        //dd($request);
        $formclass = new FormClass();
        $formclass->class_name = $request->class_name;
        $formclass->save();
        return redirect()->route('formclassteacher');
    }

    /**
     * Display the specified resource.
     */
    public function show(FormClass $formClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormClass $formClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormClass $formClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormClass $formClass)
    {
        //
    }
}
