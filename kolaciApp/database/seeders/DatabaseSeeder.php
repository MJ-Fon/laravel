<?php

namespace Database\Seeders;

use App\Models\Kategorija;
use App\Models\Porudzbina;
use App\Models\Proizvod;
use App\Models\User;
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
        User::truncate();
        Porudzbina::truncate();
        Proizvod::truncate();
        Kategorija::truncate();
       User::factory(10)->create();
       $ks = new KategorijaSeeder();
       $ks->run();
       Proizvod::factory(10)->create();
       Porudzbina::factory(10)->create();





    }
}
