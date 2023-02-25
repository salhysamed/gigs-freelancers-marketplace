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
        $tags = ['Laravel', 'developer', 'fullstack', 'gig','frontend','SQL'];
        return [
            'title' => $this->faker->sentence(),
            'company' => $this->faker->company(),
            'type' => 'gigType',
            'description' => $this->faker->paragraph(5),
            'tags' => $tags[rand(0,4)].','.$tags[rand(0,4)].','.$tags[rand(0,5)].','.$tags[rand(0,5)].','.$tags[rand(0,4)],
            'email' => $this->faker->CompanyEmail(),
            'website' => $this->faker->url(),
            'phone' => $this->faker->phoneNumber(),
            'location' => $this->faker->company()
        ];
    }
}
