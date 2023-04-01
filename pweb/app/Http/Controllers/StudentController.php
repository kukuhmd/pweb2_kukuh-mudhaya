<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentFormRequest;
use App\Models\Student;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }

    public function store(StudentFormRequest $request)
    {
        $data = $request->validated();

        $student = Student::create($data);
        return redirect('/add-student')->with('message', 'Student Added Succesfully');
        // $student = Student::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'phone' => $data['phone'],
        // ]);
    }
}
