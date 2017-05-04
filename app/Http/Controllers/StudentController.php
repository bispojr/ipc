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
        return view('student.admin.username.index', $data);
    }
    public function adminUsernameEdit()
    {
        $data = Student::data("adminUsernameEdit");
        return view('student.admin.username.edit.index', $data);
    }
    public function adminUsernameEditSuccess()
    {
        $data = Student::data("adminUsernameEditSuccess");
        return view('student.admin.username.edit.success', $data);
    }
    public function adminUsernameEditError()
    {
        $data = Student::data("adminUsernameEditError");
        return view('student.admin.username.edit.error', $data);
    }
    public function adminUsernameDelete()
    {
        $data = Student::data("adminUsernameDelete");
        return view('student.admin.username.delete.index', $data);
    }
    public function adminUsernameDeleteSuccess()
    {
        $data = Student::data("adminUsernameDeleteSuccess");
        return view('student.admin.username.delete.success', $data);
    }
    public function adminCreate()
    {
        $data = Student::data("adminCreate");
        return view('student.admin.create.index', $data);
    }
    public function adminCreateSuccess()
    {
        $data = Student::data("adminCreateSuccess");
        return view('student.admin.create.success', $data);
    }
    public function adminCreateError()
    {
        $data = Student::data("adminCreateError");
        return view('student.admin.create.error', $data);
    }
}
