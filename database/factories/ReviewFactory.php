<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Review;
use App\Models\Hotel;

class ReviewFactory extends Factory
{
    // Here I'm explicitly defining the name of the facatory's corresponding model
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hotel_id'    => Hotel::inRandomOrder()->first()->id,
            'title'       => $this->faker->sentence,
            'review_text' => $this->faker->paragraph,
            'author'      => $this->faker->name,
            'created_at'        => $this->faker->dateTimeBetween('-25 days', now()),
            'updated_at'        => $this->faker->dateTimeBetween('-26 days', now())
        ];
    }
}
