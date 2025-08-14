<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('pacientes')->insert([
            ['nome' => 'João Silva', 'telefone' => '11999999999', 'email' => 'joao@email.com', 'data_nascimento' => '1990-05-10'],
            ['nome' => 'Maria Souza', 'telefone' => '11988888888', 'email' => 'maria@email.com', 'data_nascimento' => '1985-08-22'],
        ]);
    }
}
