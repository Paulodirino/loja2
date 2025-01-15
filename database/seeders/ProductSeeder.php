<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "name"=> "Produto A",
            "description"=> "Descricao Produto A",
            "price"=> 12.01,
            "stock"=> 12
        ]);
        Product::create([
            "name"=> "Produto B",
            "description"=> "Descricao Produto B",
            "price"=> 17.02,
            "stock"=> 2
        ]);
    }
}
