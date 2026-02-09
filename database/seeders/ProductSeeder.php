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
            [
                'name' => 'Samsung Galaxy S23',
                'slug' => 'samsung-galaxy-s23',
                'description' => 'Android flagship with stunning display',
                'price' => 850.00,
                'stock' => 12,
                'image' => 'samsung.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'slug' => 'sony-wh-1000xm5',
                'description' => 'Premium noise-canceling headphones',
                'price' => 350.00,
                'stock' => 20,
                'image' => 'sony-headphones.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'iPad Pro 12.9"',
                'slug' => 'ipad-pro-129',
                'description' => 'Professional tablet with M2 chip',
                'price' => 1100.00,
                'stock' => 6,
                'image' => 'ipad.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Logitech MX Master 3S',
                'slug' => 'logitech-mx-master-3s',
                'description' => 'Ergonomic wireless mouse for productivity',
                'price' => 100.00,
                'stock' => 25,
                'image' => 'logitech-mouse.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'LG UltraGear 27"',
                'slug' => 'lg-ultragear-27',
                'description' => '144Hz gaming monitor with 1ms response',
                'price' => 450.00,
                'stock' => 7,
                'image' => 'lg-monitor.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Keychron K8 Pro',
                'slug' => 'keychron-k8-pro',
                'description' => 'Wireless mechanical keyboard',
                'price' => 120.00,
                'stock' => 18,
                'image' => 'keychron.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Apple AirPods Pro 2',
                'slug' => 'airpods-pro-2',
                'description' => 'Active noise cancellation earbuds',
                'price' => 250.00,
                'stock' => 30,
                'image' => 'airpods.jpg',
                'created_at' => now(),
            ],
        ]);
    }
}


