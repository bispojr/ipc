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
    public function adminID()
    {
        $data = Problem::data("adminID");
        return view('problem.admin.id.index', $data);
    }
    public function adminIDEdit()
    {
        $data = Problem::data("adminIDEdit");
        return view('problem.admin.id.edit.index', $data);
    }
    public function adminIDEditSuccess()
    {
        $data = Problem::data("adminIDEditSuccess");
        return view('problem.admin.id.edit.success', $data);
    }
    public function adminIDEditError()
    {
        $data = Problem::data("adminIDEditError");
        return view('problem.admin.id.edit.error', $data);
    }
    public function adminIDDelete()
    {
        $data = Problem::data("adminIDDelete");
        return view('problem.admin.id.delete.index', $data);
    }
    public function adminIDDeleteSuccess()
    {
        $data = Problem::data("adminIDDeleteSuccess");
        return view('problem.admin.id.delete.success', $data);
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
