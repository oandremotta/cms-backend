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
        Schema::create('app_dados_da_crianca', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('ra');
            $table->string('escola');
            $table->string('professor');
            $table->string('ano_serie');
            $table->string('periodo');
            $table->string('turma');
            $table->foreignId('idTenant')->constrained('tenants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_dados_da_crianca');
    }
};
