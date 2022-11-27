<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class VersionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $start = $this->faker->dateTimeBetween('-2 years', '+1 years');
        $end = $this->faker->dateTimeBetween($start, $start->format('Y-m-d H:i:s').' +15 days');

        return [
            'event_id' => Event::all()->random(),
            'name' => $this->faker->catchPhrase(),
            'location' => $this->faker->streetAddress(),
            'city' => $this->faker->city().', '.$this->faker->state(),
            'country' => $this->faker->country(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'begin_date' => $start->format('Y-m-d'),
            'end_date' => $end->format('Y-m-d'),
        ];         
    }
}