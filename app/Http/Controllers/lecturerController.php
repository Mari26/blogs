<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class lecturerController extends Controller {
    public function index() {
        $users = DB::select('select * from Lecturer');
        return view('lecturer',['users'=>$users]);
    }
}