<?php

namespace Database\Factories;

use App\Models\Auction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\auction>
 */
class AuctionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->name(),
            'description' => fake()->text(),
            'starting_price' => fake()->randomFloat(2, 0, 10000),
            'end_at' => fake()->dateTimeBetween('now', '+1 month'),
        ];
    }

    public function run(): void
    {
        Auction::factory()
            ->count(1000)
            ->create();
    }
}