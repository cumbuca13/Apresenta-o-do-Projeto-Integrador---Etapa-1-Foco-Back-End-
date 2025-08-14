<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtendimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('atendimentos')->insert([
            [
                'paciente_id' => 1,
                'dentista_id' => 1,
                'data_atendimento' => now()->addDays(2),
                'descricao' => 'Consulta inicial para avaliação ortodôntica',
                'status' => 'Agendado'
            ],
        ]);
    }
}
