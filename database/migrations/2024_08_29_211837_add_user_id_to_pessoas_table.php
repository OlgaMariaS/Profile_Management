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
        Schema::table('pessoas', function (Blueprint $table) {
            //Declara essa coluna como chave estrangeira, entre o usuário a tabela de pessoas
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pessoas', function (Blueprint $table) {
            //Se for removido usuário, remove os registros atrelados a ele
            $table->foreingId('user_id')
            ->constrained()
            ->onDelete('cascade');
        });
    }
};
