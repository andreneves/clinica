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
                'telefone' => '(11) 98765-1234',
                'email' => 'carlos.mendes@clinicavet.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Dra. Juliana Santos',
                'crmv' => '67890-SP',
                'especialidade' => 'Cirurgia',
                'telefone' => '(11) 91234-5678',
                'email' => 'juliana.santos@clinicavet.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Dr. Roberto Almeida',
                'crmv' => '24680-SP',
                'especialidade' => 'Dermatologia',
                'telefone' => '(11) 95555-4321',
                'email' => 'roberto.almeida@clinicavet.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
