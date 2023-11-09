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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usager_id')->constrained()->onDelete('cascade');
            $table->foreignId('campagne_id')->constrained()->onDelete('cascade');
            $table->string('nom_article',100);
            $table->string('couleur_article',100);
            $table->string('hexcode',100);
            $table->string('taille_article',100);
            $table->integer('quantite')->default(1);;
            $table->string('statut',100)->default("en attente de paiement");
            $table->string('etat',100)->default("commande validée");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('commandes');
    }
};
