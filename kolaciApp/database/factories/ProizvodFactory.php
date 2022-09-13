<?php

namespace Database\Factories;

use App\Models\Kategorija;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProizvodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->randomElement($array = array ('cokoladna torta','ljubacicasti sladoled','lizalica za decu','cokolada','cake pops')),
            'opis' => $this->faker->sentence($nbWords = 6, $variableNbWords = true) ,
            'cena' => $this->faker->numberBetween($min =150,$max =3000) ,
            'kategorija_id' =>random_int(1,Kategorija::count()),
            
 
        ];
    }
}
