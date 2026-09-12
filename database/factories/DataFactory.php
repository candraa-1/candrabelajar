<?php

namespace Database\Factories;

use App\Models\item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<item>
 */
class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_toko'=>fake()->words(6,true),
            'nama_barang'=>fake()->words(7,true),
            'stok_barang'=>fake()->numberBetween(6000, 1200, 1500),
            'terjual'=>fake()->numberBetween(300, 200),
        ];
    }
}
