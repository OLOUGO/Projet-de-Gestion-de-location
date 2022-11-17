<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Client;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this-> call(TypeArticleTableSeeder::class);
        Article::factory(10)->create();
        Client::factory(10)->create();

        $this-> call(PermissionTableSeeder::class);
        $this-> call(RoleTableSeeder::class);
        $this-> call(DureeLocationTableSeeder::class);
        $this-> call(StatutLocationTableSeeder::class);

    }
}
