<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudViewController extends Controller {
    public function index() {
        $users = Student::all();
        return view('stud_view',['users'=>$users]);
    }
}