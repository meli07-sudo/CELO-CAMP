<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
                [
                    "title"=>"Développement Web/Web Mobile",
                    "icon"=>"/images/web-development.png"
                ],
                [
                    "title"=>"Trading",
                    "icon"=>"/images/trading.png"
                ],
                [
                    "title"=>"Réseaux et Interconnections",
                    "icon"=>"/images/decentralized-network.png"
                ],
                [
                    "title"=>"Cryptomonnaies",
                    "icon"=>"/images/cryptocurrency.png"
                ],
                [
                    "title"=>"Autres",
                    "icon"=>"/images/white-black-logo.png"
                ],
    
            ]);
    }
}
