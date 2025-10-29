<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    use HasFactory;

    protected $table = 'publicacoes'; // 👈 Corrige o nome da tabela

    protected $fillable = ['foto', 'titulo_prato', 'local', 'cidade', 'empresa_id', 'createdAt', 'createdAt'];

    public function avaliacao()
    {
        return $this->hasOne(Avaliacao::class, 'publicacao_id');
    }
}
