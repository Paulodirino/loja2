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
            "nome"=> "Produto A",
            "descricao"=> "Descricao Produto A",
            "preco"=> 12.01,
            "estoque"=> 12
        ]);
        Product::create([
            "nome"=> "Produto B",
            "descricao"=> "Descricao Produto B",
            "preco"=> 17.02,
            "estoque"=> 2
        ]);
    }
}
