<?php

namespace Database\Seeders;

use App\Models\Kategorija;
use Illuminate\Database\Seeder;

class KategorijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $k1 = new Kategorija();
        $k1->naziv_kategorije="torta";
        $k1->save();
 
        $k2 = new Kategorija();
        $k2->naziv_kategorije="sladoled";
        $k2->save();
 
        $k3 = new Kategorija();
        $k3->naziv_kategorije="lizalica";
        $k3->save();
        $k4 = new Kategorija();
        $k4->naziv_kategorije="ostalo";
        $k4->save();
        
        $k5 = new Kategorija();
        $k5->naziv_kategorije="cookie";
        $k5->save();
 
 

    }
}
