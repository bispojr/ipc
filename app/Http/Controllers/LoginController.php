<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Login as Login;

class LoginController extends Controller
{
    public function student()
    {
        $data = Login::data("student");
        return view('login.student.index', $data);
    }
    public function admin()
    {
        $data = Login::data("admin");
        return view('login.admin.index', $data);
    }
    public function studentError()
    {
        $data = Login::data("studentError");
        return view('login.student.error', $data);
    }
    public function adminError()
    {
        $data = Login::data("adminError");
        return view('login.admin.error', $data);
    }
}
