<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class click extends Controller
{
    public function index()
    {
        return view('click');
    }
}
