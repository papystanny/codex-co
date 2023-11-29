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
        Schema::create('formAccidentsTravails', function (Blueprint $table) {
            $table->id();
            $table->string ('nomFormulaire',100);
            $table->string('nomEmploye',100);
            $table->string('fonctionMomentEvenement',100);
            $table->integer('matriculeEmploye');
            $table->date('dateAccident');
            $table->time('heureAccident');
            $table->string('nomsTemoins',255)->nullable();
            $table->string('endroitAccident',100);
            $table->string('secteurActivite',255);
            $table->string('natureSiteBlessure',255);
            $table->string('descriptionBlessure',255);
            $table->string('violence',100);
            $table->string('descriptionDeroulementBlessure',255);
            $table->string('premiersSoins',100);
            $table->string('nomSecouriste',100);
            $table->string('necessiteAccident',255);
            $table->string('nomSuperviseurAvise',100)->nullable();
            $table->string('prenomSuperviseurAvise',100)->nullable();
            $table->date('dateSuperviseurAvise')->nullable();
            $table->string('signatureEmploye',100)->nullable();
            $table->string('signatureSuperviseur',100)->nullable();
            $table->date('dateSignatureEmploye')->nullable();
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
        Schema::dropIfExists('formAccidentsTravails');
    }
};
