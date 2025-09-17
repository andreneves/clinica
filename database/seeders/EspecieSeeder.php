<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EspecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('especies')->insert([
            [
                'nome' => 'Canino',
                'descricao' => 'Cães domésticos de diversas raças',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Felino',
                'descricao' => 'Gatos domésticos de diversas raças',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Ave',
                'descricao' => 'Diferentes tipos de aves, como papagaios, canários e calopsitas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Roedor',
                'descricao' => 'Hamsters, porquinhos da índia, coelhos e outros pequenos roedores',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nome' => 'Réptil',
                'descricao' => 'Tartarugas, lagartos, cobras e outros répteis',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
