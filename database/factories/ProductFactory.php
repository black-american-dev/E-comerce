<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                'category_id' => 1,
                'name' => 'Dell XPS 13',
                'slug' => 'dell-xps-13',
                'description' => 'Powerful ultrabook for developers',
                'price' => 1200.00,
                'stock' => 10,
                'image' => 'dell.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'name' => 'MacBook Air M2',
                'slug' => 'macbook-air-m2',
                'description' => 'Lightweight and fast laptop',
                'price' => 1400.00,
                'stock' => 8,
                'image' => 'macbook.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'iPhone 14',
                'slug' => 'iphone-14',
                'description' => 'Apple smartphone',
                'price' => 900.00,
                'stock' => 15,
                'image' => 'iphone.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    }
}
