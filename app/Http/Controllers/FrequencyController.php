<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Frequency as Frequency;

class FrequencyController extends Controller
{
    public function adminIndex()
    {
        $data = Frequency::data("adminIndex");
        return view('frequency.admin.index', $data);
    }
}
