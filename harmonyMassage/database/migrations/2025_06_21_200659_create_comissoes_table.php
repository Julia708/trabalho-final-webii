<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comissoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('massagista_id')->constrained('users');
            $table->foreignId('gerente_id')->constrained('users');
            $table->decimal('percentual', 5, 2);
            $table->decimal('valor_calculado', 8, 2);
            $table->string('referente_mes');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comissoes');
    }
};
