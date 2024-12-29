<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Project extends Controller
{
    function index()
    {
            return view('project');
    }
}
