<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class StudInsertController extends Controller
{
    public function store() {
        return view('stud_create');
    }
    public function insert(Request $request) {
        $name = $request->input('stud_name');
        DB::insert('insert into studentsinsert (name) values(?)',[$name]);
        echo "<p style='color:forestgreen ; text-align:center;font-size:45px;font-weight: bold'>"."Record inserted successfully.<br/>"."</p>";
        //echo '<a href = "/insert">Click Here</a> to go back.';
    }
}
