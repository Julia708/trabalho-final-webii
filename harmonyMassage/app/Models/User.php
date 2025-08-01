<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [ 'name', 'email', 'password', 'telefone', 'tipo' ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function agendamentosCliente()
    {
        return $this->hasMany(Agendamento::class);
    }

    public function agendamentosMassagista()
    {
        return $this->hasMany(Agendamento::class);
    }

    public function avaliacoesRecebidas()
    {
        return $this->hasMany(Avaliacao::class);
    }

    public function avaliacoesFeitas()
    {
        return $this->hasMany(Avaliacao::class);
    }

    public function relatorios()
    {
        return $this->hasMany(Relatorio::class);
    }

    public function comissoes()
    {
        return $this->hasMany(Comissao::class);
    }

    public function comissoesGerenciadas()
    {
        return $this->hasMany(Comissao::class);
    }
}
