<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animais')->insert([
            'nome' => 'Bibi',
            'especie' => 'gato',
            'raca' => 'Siames',
            'idade' => '4',
            'nomeDono' => 'André Neves',
        ]);

        DB::table('animais')->insert([
            'nome' => 'JJ',
            'especie' => 'gato',
            'raca' => 'Siames',
            'idade' => '5',
            'nomeDono' => 'André Neves',
        ]);

        DB::table('animais')->insert([
            'nome' => 'Snow',
            'especie' => 'gato',
            'raca' => 'SRD',
            'idade' => '3',
            'nomeDono' => 'Arduino',
        ]);
    }
}
