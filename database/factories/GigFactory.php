<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gig>
 */
class GigFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'company' => $this->faker->company(),
            'type' => 'gigType',
            'description' => $this->faker->paragraph(5),
            'tags' => 'Laravel, developer, fullstack, gig',
            'email' => $this->faker->CompanyEmail(),
            'website' => $this->faker->url(),
            'phone' => $this->faker->phoneNumber(),
            'location' => $this->faker->company()
        ];
    }
}
