<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comissao extends Model
{
    protected $table = 'comissoes';

    protected $fillable = [ 'massagista_id', 'gerente_id', 'percentual', 'valor_calculado', 'referente_mes' ];

    public function massagista()
    {
        return $this->belongsTo(User::class);
    }

    public function gerente()
    {
        return $this->belongsTo(User::class);
    }

}
