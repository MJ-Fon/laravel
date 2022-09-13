<?php

namespace Database\Factories;

use App\Models\Proizvod;
use Illuminate\Database\Eloquent\Factories\Factory;

class PorudzbinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'proizvod_id' =>random_int(1,Proizvod::count()),
            'datum' =>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'kolicina'=>random_int(1,100),
        ];
    }
}
