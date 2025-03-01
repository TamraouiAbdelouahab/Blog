<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Product::insert([
            ['title' => 'Product 01','price' => 20],
            ['title' => 'Product 02','price' => 200],
            ['title' => 'Product 03','price' => 120],
            ['title' => 'Product 04','price' => 300],
        ]);

    }
}
