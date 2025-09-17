<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nome' => 'Maria Silva',
                'email' => 'maria.silva@email.com',
                'telefone' => '(11) 98765-4321',
                'endereco' => 'Rua das Flores, 123, São Paulo-SP',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'João Pereira',
                'email' => 'joao.pereira@email.com',
                'telefone' => '(21) 91234-5678',
                'endereco' => 'Av. Brasil, 456, Rio de Janeiro-RJ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Ana Souza',
                'email' => 'ana.souza@email.com',
                'telefone' => '(31) 99876-5432',
                'endereco' => 'Rua Belo Horizonte, 789, Belo Horizonte-MG',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
