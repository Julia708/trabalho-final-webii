<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'João Cliente',
            'email' => 'cliente@exemplo.com',
            'password' => Hash::make('senha123'),
            'telefone' => '(11) 99999-9999',
            'tipo' => 'cliente',
        ]);

        User::create([
            'name' => 'Maria Massagista',
            'email' => 'massagista@exemplo.com',
            'password' => Hash::make('senha123'),
            'telefone' => '(11)88888-8888',
            'tipo' => 'massagista',
        ]);

        User::create([
            'name' => 'Carlos Gerente',
            'email' => 'gerente@exemplo.com',
            'password' => Hash::make('senha123'),
            'telefone' => '(11)77777-7777',
            'tipo' => 'gerente',
        ]);
    }
}
