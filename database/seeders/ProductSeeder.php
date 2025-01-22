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
        Product::create([
            "nome" => "Produto C",
            "descricao" => "Descricao Produto C",
            "preco" => 25.50,
            "estoque" => 5
        ]);
        Product::create([
            "nome" => "Produto D",
            "descricao" => "Descricao Produto D",
            "preco" => 40.00,
            "estoque" => 10
        ]);
        Product::create([
            "nome" => "Produto E",
            "descricao" => "Descricao Produto E",
            "preco" => 15.99,
            "estoque" => 20
        ]);
        Product::create([
            "nome" => "Produto F",
            "descricao" => "Descricao Produto F",
            "preco" => 8.75,
            "estoque" => 50
        ]);
        Product::create([
            "nome" => "Produto G",
            "descricao" => "Descricao Produto G",
            "preco" => 100.00,
            "estoque" => 3
        ]);
        Product::create([
            "nome" => "Produto H",
            "descricao" => "Descricao Produto H",
            "preco" => 60.99,
            "estoque" => 8
        ]);
        Product::create([
            "nome" => "Produto I",
            "descricao" => "Descricao Produto I",
            "preco" => 30.50,
            "estoque" => 15
        ]);
        Product::create([
            "nome" => "Produto J",
            "descricao" => "Descricao Produto J",
            "preco" => 75.20,
            "estoque" => 7
        ]);
        Product::create([
            "nome" => "Produto K",
            "descricao" => "Descricao Produto K",
            "preco" => 5.99,
            "estoque" => 100
        ]);
        Product::create([
            "nome" => "Produto L",
            "descricao" => "Descricao Produto L",
            "preco" => 22.89,
            "estoque" => 25
        ]);
        
    }
}
