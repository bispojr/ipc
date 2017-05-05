<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Lesson as Lesson;

class LessonController extends Controller
{
    public function adminIndex()
    {
        $data = Lesson::data("adminIndex");
        return view('lesson.admin.index', $data);
    }
    public function adminCode()
    {
        $data = Lesson::data("adminCode");
        return view('lesson.admin.code.index', $data);
    }
    public function adminCodeEdit()
    {
        $data = Lesson::data("adminCodeEdit");
        return view('lesson.admin.code.edit.index', $data);
    }
    public function adminCodeEditSuccess()
    {
        $data = Lesson::data("adminCodeEditSuccess");
        return view('lesson.admin.code.edit.success', $data);
    }
    public function adminCodeEditError()
    {
        $data = Lesson::data("adminCodeEditError");
        return view('lesson.admin.code.edit.error', $data);
    }
    public function adminCodeDelete()
    {
        $data = Lesson::data("adminCodeDelete");
        return view('lesson.admin.code.delete.index', $data);
    }
    public function adminCodeDeleteSuccess()
    {
        $data = Lesson::data("adminCodeDeleteSuccess");
        return view('lesson.admin.code.delete.success', $data);
    }
    public function adminCreate()
    {
        $data = Lesson::data("adminCreate");
        return view('lesson.admin.create.index', $data);
    }
    public function adminCreateSuccess()
    {
        $data = Lesson::data("adminCreateSuccess");
        return view('lesson.admin.create.success', $data);
    }
    public function adminCreateError()
    {
        $data = Lesson::data("adminCreateError");
        return view('lesson.admin.create.error', $data);
    }
}
