<?php

namespace Database\Seeders;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("socials")->insert([
            [
                "social_name"=>"google"
            ],
            [
                "social_name"=>"github"
            ],
            [
                "social_name"=>"facebook"
            ],
        ]);
    }
}
