<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Admin as Admin;

class AdminController extends Controller
{
    public function index()
    {
        $data = Admin::data("index");
        return view('admin.index', $data);
    }
}
