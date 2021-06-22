<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class lecturer_subject extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lecturer_subject')->insert([

            'lecturer_id' =>  '1',
            'subject_id' => '1',
        ]);
    }
}
