<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamentos';

    protected $fillable = [ 'cliente_id', 'massagista_id', 'data', 'horario', 'status', 'observacao' ];

    public function cliente()
    {
        return $this->belongsTo(User::class);
    }

    public function massagista()
    {
        return $this->belongsTo(User::class);
    }

    public function pagamento()
    {
        return $this->hasOne(Pagamento::class);
    }
}
