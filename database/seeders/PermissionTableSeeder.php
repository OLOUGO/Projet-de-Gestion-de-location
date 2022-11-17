<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permissions")->insert([
            [    "nom"=>"ajouter un client  " ],
            [    "nom"=>"cpnsulter un client " ],
            [    "nom"=>"editer un client" ],

            [    "nom"=>"ajouter une location  " ],
            [    "nom"=>"cpnsulter une location " ],
            [    "nom"=>"editer une location " ],

            [    "nom"=>"ajouter un article  " ],
            [    "nom"=>"cpnsulter un article" ],
            [    "nom"=>"editer un article" ],
        ]);
    }
}
