<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            // Outros seeders...
            EspecieSeeder::class,
            AnimalSeeder::class,
            ClienteSeeder::class,
            VeterinarioSeeder::class,
            ConsultaSeeder::class,
        ]);
    }
}
