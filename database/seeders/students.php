<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class students extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([

            'name' => 'student',
            'surname' => 'studenturi',
            'user_id' =>'2',
            'email' =>'studenttest@gmail.com',
            'address' =>'me-3 mk,me-4 kv',
            'birthdate' =>'01.04.2020',
            'sex' =>'female',
            'apartament' =>'apartament',
        ]);
    }
}
