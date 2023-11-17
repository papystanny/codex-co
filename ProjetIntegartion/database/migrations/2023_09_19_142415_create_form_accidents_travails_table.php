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
            $table->string('nomEmploye',100);
            $table->string('fonctionMomentEvenement',100);
            $table->integer('matriculeEmploye');
            $table->date('dateAccident');
            $table->time('heureAccident');
            $table->string('nomsTemoins',255);
            $table->string('endroitAccident',100);
            $table->string('secteurActivite',255);
            $table->string('natureSiteBlessure',255);
            $table->string('descriptionBlessure',255);
            $table->string('violence',100);
            $table->string('descriptionDeroulementBlessure',255);
            $table->string('premiersSoins',100);
            $table->string('nomSecouriste',100);
            $table->string('necessiteAccident',255);
            $table->string('supAvise',100);
            $table->string('nomSuperviseurAvise',100);
            $table->string('prenomSuperviseurAvise',100);
            $table->date('dateSuperviseurAvise');
            $table->string('signatureSupImmediat',100);
            $table->integer('numPosteSupImmediat');
            $table->date('dateSignatureSupImmediat');
            $table->string('signatureEmploye',100);
            $table->integer('numPosteEmploye');
            $table->date('dateSignatureEmploye');
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
