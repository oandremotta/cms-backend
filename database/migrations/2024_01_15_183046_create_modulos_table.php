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
        Schema::create('modulos', function (Blueprint $table) {
            $table->id();
            $table->string('modulo');
            $table->string('rota')->nullable();
            $table->integer('idPai')->nullable();
            $table->timestamps();
        });

        DB::table('modulos')->insert([
            [
                'modulo' => 'portalAluno',
                'rota' => null,
                'idPai' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'modulo' => 'portalComunidade',
                'rota' => null,
                'idPai' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],           
            [
                'modulo' => 'Cadastrar Seção',
                'rota' => null,
                'idPai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'modulo' => 'Gerenciar Seção',
                'rota' => null,
                'idPai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'modulo' => 'Visualizar Seção',
                'rota' => null,
                'idPai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'modulo' => 'Cadastrar Seção',
                'rota' => null,
                'idPai' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'modulo' => 'Gerenciar Seção',
                'rota' => null,
                'idPai' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'modulo' => 'Visualizar Seção',
                'rota' => null,
                'idPai' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],                  
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulos');
    }
};
