<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VeterinarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('veterinarios')->insert([
            [
                'nome' => 'Dr. Carlos Mendes',
                'crmv' => '12345-SP',
                'especialidade' => 'Clínica Geral',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Dra. Juliana Santos',
                'crmv' => '67890-SP',
                'especialidade' => 'Cirurgia',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Dr. Roberto Almeida',
                'crmv' => '24680-SP',
                'especialidade' => 'Dermatologia',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
