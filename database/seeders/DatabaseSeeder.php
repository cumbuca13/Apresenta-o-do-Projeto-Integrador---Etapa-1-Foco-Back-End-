<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PacienteSeeder::class,
            DentistaSeeder::class,
            AtendimentoSeeder::class,
        ]);
    }
}

