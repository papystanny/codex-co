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
        Schema::create('departement_procedurestravail', function (Blueprint $table) {
            $table->primary(['departement_id', 'procedurestravails_id']);
            $table->foreignId('departement_id')->constrained()->onDelete('cascade');
            $table->foreignId('procedurestravails_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departement_procedurestravail');
    }
};
