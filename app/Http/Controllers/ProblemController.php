<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Problem as Problem;

class ProblemController extends Controller
{
    public function adminIndex()
    {
        $data = Problem::data("adminIndex");
        return view('problem.admin.index', $data);
    }
    public function adminCode()
    {
        $data = Problem::data("adminCode");
        return view('problem.admin.code.index', $data);
    }
    public function adminCodeEdit()
    {
        $data = Problem::data("adminCodeEdit");
        return view('problem.admin.code.edit.index', $data);
    }
    public function adminCodeEditSuccess()
    {
        $data = Problem::data("adminCodeEditSuccess");
        return view('problem.admin.code.edit.success', $data);
    }
    public function adminCodeEditError()
    {
        $data = Problem::data("adminCodeEditError");
        return view('problem.admin.code.edit.error', $data);
    }
    public function adminCodeDelete()
    {
        $data = Problem::data("adminCodeDelete");
        return view('problem.admin.code.delete.index', $data);
    }
    public function adminCodeDeleteSuccess()
    {
        $data = Problem::data("adminCodeDeleteSuccess");
        return view('problem.admin.code.delete.success', $data);
    }
    public function adminCreate()
    {
        $data = Problem::data("adminCreate");
        return view('problem.admin.create.index', $data);
    }
    public function adminCreateSuccess()
    {
        $data = Problem::data("adminCreateSuccess");
        return view('problem.admin.create.success', $data);
    }
    public function adminCreateError()
    {
        $data = Problem::data("adminCreateError");
        return view('problem.admin.create.error', $data);
    }
}
