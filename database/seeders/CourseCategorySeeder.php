<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_categories')->insert([
            [
                "name"=>"Mining & contribution au réseaux"
            ],
            [
                "name"=>"Crypto-monnaies"
            ],
            [
                "name"=>"Trading de crypto-monnaies"
            ]
        ]);
    }
}
