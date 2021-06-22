<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class session_subjects extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('session_subjects')->insert([

            'session_id' =>  '1',
            'subject_id' => '1',

        ]);
    }
}
