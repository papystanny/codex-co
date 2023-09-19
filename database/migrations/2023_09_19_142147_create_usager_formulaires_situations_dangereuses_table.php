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
        Schema::create('usager_formulairesSituationsDangereuses', function (Blueprint $table) {
            $table->primary(['usager_id', 'formulairesSituationsDangereuses_id']);
            $table->foreignId('usager_id')->constrained()->onDelete('cascade');
            $table->foreignId('formulairesSituationsDangereuses_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usager_formulairesSituationsDangereuses');
    }
};
