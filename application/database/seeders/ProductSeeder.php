<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert( [
            [
                'code' => '12345',
                'name' => 'Iphone 13',
                'brand' => 'Apple',
                'description' => 'Iphone 13 pro Max 128gb',
                'price' => '5999.90',
                'available_quantity' => 200,
                'status' => 'A'
            ],
        ]);

        \App\Models\Product::factory()->count(30)->create();
    }
}
