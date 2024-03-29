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
            $table->integer('numUniteImplique');
            $table->integer('departement');
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
