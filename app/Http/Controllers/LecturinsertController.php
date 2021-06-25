<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class LecturinsertController extends Controller
{
    public function store() {
        return view('add_lecturer');
    }
    public function insert(Request $request) {
        $data = $request->input();
        $lec_name=$data['lecturer_name'];
        $last_name=$data['lecturer_last'];
        $lec_email=$data['lecturer_email'];
        $lec_address=$data['lecturer_address'];
        $lec_apartment=$data['lecturer_app'];
        $lec_sex=$data['lecturer_sex'];
        $lec_number=$data['lecturer_number'];
        $lec_rank_id=$data['lecturer_id'];
        DB::insert('insert into lecturer(name,suraname,email,address,apartment,sex,bank_acount_number,rank_id) values(?,?,?,?,?,?,?,?)',[$lec_name,$last_name,$lec_email,$lec_address, $lec_apartment,$lec_sex,$lec_number,$lec_rank_id]);
        echo "<p style='color:forestgreen ; text-align:center;font-size:45px;font-weight: bold'>"."Record inserted successfully.<br/>"."</p>";
        //echo '<a href = "/insert">Click Here</a> to go back.';
    }

}
