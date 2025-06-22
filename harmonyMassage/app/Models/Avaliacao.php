<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = 'avaliacoes';

    protected $fillable = [ 'cliente_id', 'massagista_id', 'comentario', 'nota', 'data' ];

    public function cliente()
    {
        return $this->belongsTo(User::class);
    }

    public function massagista()
    {
        return $this->belongsTo(User::class);
    }
    
}
