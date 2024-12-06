<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        // Generate a start time
        $start_time = $this->faker->dateTimeBetween('now', '+3 months');

        // Determine the duration of the event
        $durationType = $this->faker->randomElement(['short', 'long']);
        if ($durationType === 'short') {
            // Short duration: 1 to 2 hours
            $end_time = (clone $start_time)->modify('+'.rand(1, 2).' hours');
        } else {
            // Long duration: 1 to 3 days
            $end_time = (clone $start_time)->modify('+'.rand(1, 3).' hours');
        }

        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'start_time' => $start_time,
            'end_time' => $end_time,
            'location' => $this->faker->city(),
        ];
    }
}
