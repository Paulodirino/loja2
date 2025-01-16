<?php

namespace Database\Seeders;
<<<<<<< HEAD

=======
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
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
<<<<<<< HEAD
            'name'=> 'Produto A',
            'description' => 'Descrição',
            'price' => 15.60,
            'stock' => 13
=======
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
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
        ]);
    }
}
