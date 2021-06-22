<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cources;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;


class CourceController extends Controller
{
    public function index() {
        $users = DB::select('select * from cources');
        return view('cources',['users'=>$users]);
    }

}
