<?php

namespace Database\Factories;

use App\Models\Feed;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Feed>
 */
class FeedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Feed::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4), // Menghasilkan judul 4 kata
            'statusFeed' => $this->faker->paragraph(3), // Deskripsi 3 paragraf
            'likeFeed' => $this->faker->numberBetween(5, 100) * 100, // Like 500 - 10 Rb
            'created_at' => $this->faker->dateTimeBetween('-1 months', 'now'),
        ];
    }
}