<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = 'avaliacoes';

    protected $fillable = [ 'agendamento_id', 'comentario', 'nota' ];

    public function agendamento()
    {
        return $this->belongsTo(Agendamento::class);
    }
    
}
