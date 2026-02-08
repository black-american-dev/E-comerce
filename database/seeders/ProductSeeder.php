<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                
                'name' => 'Dell XPS 13',
                'slug' => 'dell-xps-13',
                'description' => 'Powerful ultrabook for developers',
                'price' => 1200.00,
                'stock' => 10,
                'image' => 'dell.jpg',
                'created_at' => now(),
            ],
            [
                
                'name' => 'MacBook Air M2',
                'slug' => 'macbook-air-m2',
                'description' => 'Lightweight and fast laptop',
                'price' => 1400.00,
                'stock' => 8,
                'image' => 'macbook.jpg',
                'created_at' => now(),
            ],
            [
                
                'name' => 'iPhone 14',
                'slug' => 'iphone-14',
                'description' => 'Apple smartphone',
                'price' => 900.00,
                'stock' => 15,
                'image' => 'iphone.jpg',
                'created_at' => now(),
            ],
        ]);
    }
}


