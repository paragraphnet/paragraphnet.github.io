<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    function index()
    {
            return view('contact');
    }
}
