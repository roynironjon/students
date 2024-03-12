<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function list(){
        $data['students'] = Student::all();
        return view('student.index', $data);
    }
    function create(){
        return view('student.create');
    }
    function store(StudentRequest $req){
        $st = new Student();
        $st->name = $req->name;
        $st->roll = $req->roll;
        $st->registration = $req->registration;
        $st->save();
        return redirect()->route('student.list');
    }
    function edit($id){
        $data['students'] = Student::findOrFail($id);
        return view('student.edit', $data);
    }
    function update(StudentRequest $req, $id){
        $st = Student::findOrFail($id);
        $st->name = $req->name;
        $st->roll = $req->roll;
        $st->registration = $req->registration;
        $st->update();
        return redirect()->route('student.list');
    }
    function view($id){
        $data['st'] = Student::findOrFail($id);
        return view('student.view', $data);
    }
    function delete($id){
        $st = Student::findOrFail($id);
        $st->delete();
        return redirect()->route('student.list');
    }
    function status($id){
        $st = Student::findOrFail($id);
        if($st->status == 1){
            $st->status = 0;
        }else{
            $st->status = 1;
        }
        $st->update();
        return redirect()->route('student.list');
    }
}
