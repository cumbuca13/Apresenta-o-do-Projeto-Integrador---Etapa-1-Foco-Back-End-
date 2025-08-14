<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DentistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('dentistas')->insert([
            ['nome' => 'Dr. Carlos Mendes', 'especialidade' => 'Ortodontia', 'telefone' => '11977777777', 'email' => 'carlos@email.com'],
            ['nome' => 'Dra. Fernanda Lima', 'especialidade' => 'Endodontia', 'telefone' => '11966666666', 'email' => 'fernanda@email.com'],
        ]);
    }
}
