<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudViewController extends Controller {
    public function index() {
        $users = Student::all();
        return view('stud_view',['users'=>$users]);
    }

    public function show($id) {
        $users = DB::select('select * from students where id = ?',[$id]);
        return view('stud_update',['users'=>$users]);
    }
    public function edit(Request $request,$id) {
        $name = $request->input('stud_name');
        DB::update('update students set name = ? where id = ?',[$name,$id]);
        echo "<p style='color:forestgreen ; text-align:center;font-size:45px;font-weight: bold'>"."Record updated successfully.<br/>"."</p>";
        //echo '<a href = "/click">go back</a>';
    }

}