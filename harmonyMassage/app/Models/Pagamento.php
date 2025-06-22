<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = 'pagamentos';

    protected $fillable = [ 'agendamento_id', 'metodo', 'valor', 'status', 'comprovante', 'data_pagamento' ];

    public function agendamento()
    {
        return $this->belongsTo(Agendamento::class);
    }
    
}
