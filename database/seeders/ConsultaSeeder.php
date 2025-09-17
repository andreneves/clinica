<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('consultas')->insert([
            [
                'data_consulta' => '2023-10-15',
                'descricao' => 'Consulta de rotina com vacinação anual. Animal apresentou-se saudável, sem sinais de doença.',
                'animal_id' => 1, // Certifique-se de que existe um animal com este ID
                'veterinario_id' => 2, // Certifique-se de que existe um veterinário com este ID
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'data_consulta' => '2023-10-18',
                'descricao' => 'Tratamento de dermatite alérgica. Prescrito anti-alérgico e recomendado banho com shampoo medicinal semanalmente.',
                'animal_id' => 2, // Certifique-se de que existe um animal com este ID
                'veterinario_id' => 3, // Certifique-se de que existe um veterinário com este ID
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'data_consulta' => '2023-10-20',
                'descricao' => 'Avaliação pré-operatória para castração. Exames de sangue realizados e animal liberado para procedimento.',
                'animal_id' => 3, // Certifique-se de que existe um animal com este ID
                'veterinario_id' => 1, // Certifique-se de que existe um veterinário com este ID
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'data_consulta' => '2023-10-25',
                'descricao' => 'Acompanhamento pós-operatório. Pontos em bom estado, sem sinais de infecção. Recuperação progredindo normalmente.',
                'animal_id' => 3, // Mesmo animal da consulta anterior
                'veterinario_id' => 1, // Mesmo veterinário da consulta anterior
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
