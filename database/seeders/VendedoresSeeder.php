<?php

namespace Database\Seeders;

use App\Models\Vendedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vendedor::create([
            "nome" => "Carlos Silva",
            "email" => "carlos.silva@example.com",
            "telefone" => "123456789"
        ]);

        Vendedor::create([
            "nome" => "Ana Oliveira",
            "email" => "ana.oliveira@example.com",
            "telefone" => "987654321"
        ]);
    }
}
