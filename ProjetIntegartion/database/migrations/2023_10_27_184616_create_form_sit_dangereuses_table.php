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
        Schema::create('formSitDangereuses', function (Blueprint $table) {
            $table->id();
            $table->string ('nomFormulaire',100);
            $table-> string('nomEmploye',100);
            $table-> string('prenomEmploye',100);
            $table->integer('matriculeEmploye');
            $table->string('fonctionLorsEvenement',100);
            $table->string('secteurActivite',100);
            $table->date('dateObservation');
            $table->time('heureObservation');
            $table->string('temoins',255);
            $table->string('descriptionEvenement',255);
            $table->string('ameliorationsProposees',255);
            $table->string('nomSuperviseur',100)->nullable();
            $table->date('dateSupeAvise')->nullable();
            $table->string('signatureEmploye',100)->nullable();
            $table->date('dateSignatureEmploye')->nullable();
            $table->string('signatureSuperviseur',100)->nullable();
            $table->date('dateSignatureSuperviseur')->nullable();
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
        Schema::dropIfExists('formSitDangereuses');
    }
};
