<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hotel;
use Illuminate\Support\Str;

class HotelFactory extends Factory
{
    // Here I'm explicitly defining the name of the facatory's corresponding model
    protected $model = Hotel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hotel_name' => $this->faker->company,
            'hotel_star_rating' => $this->faker->numberBetween(0,5),
            'hotel_address' => $this->faker->address,
            'supplier' => $this->faker->randomElement(['Own', 'HotelBeds', 'SunHotels']),
            'active' => $this->faker->boolean,
            'created_at' => $this->faker->dateTimeBetween('-20 days', now()),
            'updated_at' => $this->faker->dateTimeBetween('-20 days', now())
        ];
    }
}
