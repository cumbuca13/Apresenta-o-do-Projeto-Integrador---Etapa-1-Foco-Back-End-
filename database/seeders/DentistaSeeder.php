<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dentista;

class DentistaSeeder extends Seeder
{
    public function run(): void
    {
        Dentista::factory()->count(3)->create();
    }
}

