<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('students.list',['userslist'=>$data]);
    }

    public function profile($id)
    {
        $user = User::find($id);
        //return view('students.list',['userslist'=>$data]);
        return view('students.profile',['user'=>$user]);
    }

    public function teacherindex()
    {
        $data = User::all();
        return view('teachers.list',['userslist'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function studentCreate()
    {
        return view(view: 'students.form');
    }

    public function teacherCreate()
    {
        return view(view: 'teachers.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
                 'name' => ['required'],
                 'email' => ['required'],
                 'password' => ['required'],
                 'date_of_birth'=> ['required'],
                 'or_level' => ['required'],
                 'topic' => ['required'],
                 'class' => ['required'],
                 'interests' => ['required']
             ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->date_of_birth = $request->date_of_birth;
        $user->role = $request->role;
        $user->or_level = $request->or_level;
        $user->current_book_name = $request->current_book_name;
        $user->topic = $request->topic;
        $user->class = $request->class;
        $user->interests = $request->interests;
        $user->save();
        return redirect()->route('users');
    }

    public function teacherstore(Request $request)
    {
        $request->validate([
                 'name' => ['required'],
                 'email' => ['required'],
                 'password' => ['required'],
                 'date_of_birth'=> ['required'],
                 'interests' => ['required']
             ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->date_of_birth = $request->date_of_birth;
        $user->role = $request->role;
        $user->or_level = $request->or_level;
        $user->current_book_name = $request->current_book_name;
        $user->topic = $request->topic;
        $user->class = $request->class;
        $user->interests = $request->interests;
        $user->save();
        return redirect()->route('teacherusers');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    public function delete($id)
    {
        //$book = Book::find($id);
        //$book->delete();
        User::destroy($id);
        return redirect()->route('users');

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('students.form',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
                'name' => ['required'],
            ]);
        $id = $request->id;
        $user = User::find(id: $id);
        $user->update($request->all());
        //User::where($id)->update($request->User);
        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
