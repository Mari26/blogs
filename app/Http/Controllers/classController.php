<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\classes;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;


class classController extends Controller
{
    public function index() {
        $users = DB::select('select * from classes');
        return view('classes',['users'=>$users]);
    }

}