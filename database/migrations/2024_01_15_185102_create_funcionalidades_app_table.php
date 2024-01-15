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
        Schema::create('funcionalidades_app', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('icone');
            $table->string('info')->nullable();
            $table->string('rotaApp')->nullable();
            $table->timestamps();
            $table->softDeletes();            
        });

        DB::table('funcionalidades_app')->insert([
            [
                'id' => 1,
                'nome' => 'Aluno',
                'icone' => 'fa fa-user',
                'info' => 'Exibição dos dados do aluno',
                'rotaApp' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nome' => 'Merenda',
                'icone' => 'fa fa-cutlery',
                'info' => null,
                'rotaApp' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],    
            [
                'id' => 3,
                'nome' => 'Relatórios',
                'icone' => 'fa fa-chart-bar',
                'info' => null,
                'rotaApp' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'nome' => 'Comunicados',
                'icone' => 'fa fa-bullhorn',
                'info' => 'Comunicados e avisos',
                'rotaApp' => null,
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
        Schema::dropIfExists('funcionalidades_app');
    }
};
