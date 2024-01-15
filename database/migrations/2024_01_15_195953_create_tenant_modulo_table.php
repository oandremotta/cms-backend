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
        Schema::create('tenants_modulo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idTenant')->constrained('tenants');
            $table->foreignId('idModulo')->constrained('modulos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_modulo');
    }
};
