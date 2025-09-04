<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Paciente;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PacienteApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_listar_pacientes_requer_auth(): void
    {
        $response = $this->getJson('/api/pacientes');
        $response->assertStatus(401);
    }

    public function test_criar_paciente_autenticado(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user, 'sanctum');

        $payload = [
            'nome' => 'João',
            'email' => 'joao@ex.com',
            'telefone' => '(42) 99999-9999',
            'data_nascimento' => '1990-05-10'
        ];

        $response = $this->postJson('/api/pacientes', $payload);
        $response->assertCreated()->assertJsonFragment(['nome' => 'João']);
        $this->assertDatabaseHas('pacientes', ['email' => 'joao@ex.com']);
    }
}
