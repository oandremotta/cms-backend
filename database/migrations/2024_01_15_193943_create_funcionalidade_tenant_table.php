<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('funcionalidades_tenant', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idTenant')->constrained('tenants');
            $table->foreignId('idFuncionalidadeApp')->constrained('funcionalidades_app');
            $table->string('apelido_funcionalidade')->nullable();
            $table->timestamps();
        });

        DB::table('funcionalidades_tenant')->insert([
            [
                'id' => 1,
                'idTenant' => 1,
                'idFuncionalidadeApp' => 1,
                'apelido_funcionalidade' => null,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionalidades_tenant');
    }
};
