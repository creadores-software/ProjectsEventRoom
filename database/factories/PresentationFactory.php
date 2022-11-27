<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Version;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Presentation>
 */
class PresentationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'version_id' => Version::all()->random(),
            'name' => $this->faker->bs(),
            'description' => $this->faker->text(rand(200, 300)),
            'url' => $this->faker->url(),
        ];
    }
}