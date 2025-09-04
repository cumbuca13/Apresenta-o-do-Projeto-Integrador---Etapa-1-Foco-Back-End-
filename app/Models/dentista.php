<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dentista extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'especialidade', 'telefone', 'email'];

    public function atendimentos()
    {
        return $this->hasMany(Atendimento::class);
    }
}
