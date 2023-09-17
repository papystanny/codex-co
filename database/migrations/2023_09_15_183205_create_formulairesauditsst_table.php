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
        Schema::create('formulairesauditsst', function (Blueprint $table) {
            $table->id();
            $table->string('prenomNomEmploye',100);
            $table->string('lieuTravail',100);
            $table->string('date',100);
            $table->time('heure');
            $table->string('Epi',100);
            $table->string('tenueLieux',100);
            $table->string('signalisation',100);
            $table->string('fichesSignaletiques',100);
            $table->string('traveauxEscavation',100);
            $table->string('espaceClos',100);
            $table->string('methodeTravail',100);
            $table->string('autre',250);
            $table->string('respectDistanciation',100);
            $table->string('portEpi',100);
            $table->string('respectProcedures',100);
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
        Schema::dropIfExists('formulairesauditsst');
    }
};
