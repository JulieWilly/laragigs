<?php

namespace Database\Factories;

use App\Models\Listings;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listings>
 */
class ListingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(1),
            'tags' => 'laravel, api, backend, UI/UX, front-end',
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'location' => $this->faker->city(),
            'company' => $this->faker->company(),
            'description' => $this->faker->paragraph(3)
        ];
        

    }
}
