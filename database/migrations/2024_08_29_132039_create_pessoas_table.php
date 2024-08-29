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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id()->primary_key;
            $table->string('nome', 100);
            $table->string('email');
            $table->integer('idade');
            $table->string('telefone', 15);
            $table->string('cidade', 50);
            $table->timestamps(); //Armazena no banco data de criação e ultima atualização da tabela
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
