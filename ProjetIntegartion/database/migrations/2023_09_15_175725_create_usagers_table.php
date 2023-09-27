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
         Schema::create('usagers', function (Blueprint $table) {
             $table->id();
             $table->string('nom',255);
             $table->string('prenom',100);
             $table->integer('matricule')->unique();
             $table->string('password',100);
             $table->string('poste',100);
             $table->integer('droitEmploye');
             $table->integer('droitSuperieur');
             $table->integer('droitAdmin');
             $table->string('nomSuperviseur',100)->nullable();
             $table->foreignId('departement_id')->constrained();
             $table->rememberToken()->nullable();
             $table->timestamps();
         });
     }
 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usagers');
    }
};
