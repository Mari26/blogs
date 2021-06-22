<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lecturer;
class JointableController extends Controller
{
    function index(){
        $data = Lecturer::join('ranks', 'ranks.id', '=', 'lecturer.rank_id')
            ->get(['Lecturer.name','Lecturer.suraname','Lecturer.address','Lecturer.email','Lecturer.apartment','Lecturer.sex','ranks.name']);


        return view('join_table', compact('data'));
    }
}