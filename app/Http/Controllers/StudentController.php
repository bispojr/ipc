<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Student as Student;

class StudentController extends Controller
{
    public function adminIndex()
    {
        $data = Student::data("adminIndex");
        return view('student.admin.index', $data);
    }
    public function adminUsername()
    {
        $data = Student::data("adminUsername");
        return view('student.admin.username', $data);
    }
    public function adminCreate()
    {
        $data = Student::data("adminCreate");
        return view('student.admin.create', $data);
    }
}
