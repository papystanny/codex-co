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
        Schema::create('formAtelierMecaniques', function (Blueprint $table) {
            $table->id();
            $table->string ('nomFormulaire',100);
            $table->integer('numUniteImplique');
            $table->string('departement',100);
            $table->string('prenomNomEmploye',100);
            $table->string('prenomNomSupImmediat',100);
            $table->string('numPermisConduireEmploye',100);
            $table->string('vehiculeCityonImplique',100);
            $table->string('notifSup',100);
            $table->string('notifAdmin',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formAtelierMecaniques');
    }
};
