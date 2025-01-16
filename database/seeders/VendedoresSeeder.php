<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VendedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendedores')->insert([
            [
                'nome' => 'João Silva',
                'email' => 'joao.silva@example.com',
                'telefone' => '99999-9999',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Maria Oliveira',
                'email' => 'maria.oliveira@example.com',
                'telefone' => '98888-8888',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Carlos Santos',
                'email' => 'carlos.santos@example.com',
                'telefone' => '97777-7777',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
