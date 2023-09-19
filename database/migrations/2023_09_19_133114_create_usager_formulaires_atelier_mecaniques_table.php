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
        Schema::create('usager_formulairesAtelierMecaniques', function (Blueprint $table) {
            $table->primary(['usager_id', 'formulairesAtelierMecaniques_id']);
            $table->foreignId('usager_id')->constrained()->onDelete('cascade');
            $table->foreignId('formulairesAtelierMecaniques_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usager_formulairesAtelierMecaniques');
    }
};
