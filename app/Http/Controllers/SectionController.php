<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Section as Section;

class SectionController extends Controller
{
    public function frequency($course, $section)
    {
        $data = Section::data("frequency", $course, $section);
        return view('section.admin.frequency', $data);
    }
}
