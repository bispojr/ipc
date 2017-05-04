<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Home as Home;

class HomeController extends Controller
{
    public function index()
    {
        $data = Home::data("index");
        return view('home.index', $data);
    }
}
