<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Dentista;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DentistaApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_criar_dentista_autenticado(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user, 'sanctum');

        $payload = [
            'nome' => 'Dr. Carlos',
            'especialidade' => 'Ortodontia',
            'telefone' => '(42) 98888-8888',
            'email' => 'carlos@ex.com'
        ];

        $response = $this->postJson('/api/dentistas', $payload);
        $response->assertCreated()->assertJsonFragment(['nome' => 'Dr. Carlos']);
        $this->assertDatabaseHas('dentistas', ['email' => 'carlos@ex.com']);
    }
}
