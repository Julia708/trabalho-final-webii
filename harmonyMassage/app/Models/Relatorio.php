<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    protected $table = 'relatorios';

    protected $fillable = ['massagista_id', 'descricao', 'data_inicio', 'data_fim', 'arquivo_pdf' ];

    public function massagista()
    {
        return $this->belongsTo(User::class);
    }
}
