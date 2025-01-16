<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'nome' => 'Ana Maria',
                'email' => 'ana.maria@example.com',
                'telefone' => '99999-1111',
                'endereco' => 'Rua das Flores, 123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'João Pedro',
                'email' => 'joao.pedro@example.com',
                'telefone' => '98888-2222',
                'endereco' => 'Avenida Brasil, 456',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Maria Clara',
                'email' => 'maria.clara@example.com',
                'telefone' => '97777-3333',
                'endereco' => 'Praça Central, 789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
