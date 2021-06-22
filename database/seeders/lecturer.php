<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class lecturer extends Seeder
{
    public static function all()
    {
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lecturer')->insert([

            'name' =>  'leqtori',
            'suraname' => 'leqtoris surname',
            'email' => 'leqtori@gmail.com',
            'address' => 'leqtori@gmail.com',
            'apartment' =>'asda',
            'sex' => 'male',
            'bank_acount_number' => '12312312',
            'rank_id' => '1',
        ]);
    }
}
