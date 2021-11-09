<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("courses")->insert([
            [
                "title"=>"Les bases de la cryptomonnaie",
                "category_id"=>"4",
                "author"=>"Ismael Ouiya",
                "description"=>"Les cryptomonnaies sont des monnaies dites virtuelles. Ces dernières années, elles font parties des piliers qui rythment l'actualité mondiale, et touchent presque tous les secteurs de la vie courante. Dans cette session, apprenez tout sur les cryptomonnaies, leur naissance, leur évolution et leur influence sur le monde actuel afin de mieux comprendre dans quel sens notre monde évolue depuis leur apparitions.",
            ],
            [
                "title"=>"Devenez un developpeur de solutions Blockchain",
                "category_id"=>"1",
                "author"=>"Jean-francois Zouba",
                "description"=>"La Blockchain... une technologie révolutionnaire, a fait son apparition depuis un moment déja dans nos vies. Vous voulez vous servir de cette technologie pour mettre en place des projets profitant non seulement d'un systéme decentralisé mais aussi d'une sécurité à la pointe ? Cette session est faite pour vous. Rejoignez-nous maintenant et devenez un devéloppeur de solutions Blockchain.",
            ],
            [
                "title"=>"Tradez de manière profitable",
                "category_id"=>"2",
                "author"=>"Ismael Ouiya",
                "description"=>"La Blockchain est certe l'une des plus grande révolution de l'histoire de l'humanité, mais avec elle, les cryptomonnaies ont connu un succès fulgurant, surtout celleq qui reposent sur la Blockchain. Je gagne de l'argent en tradant les cryptomonnaies basées sur la Blockchain . Tu as envies de gagner de l'argent toi-aussi ? C'est simple alors. Rejoins-nous, on t'attend pour faire de toi un trader de cryptomonnaies profitable.",
            ],
        ]);
    }
}
