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
        Schema::create('campagnes', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->date('dateDebut',100);
            $table->date('dateFin',100)->nullable();;
            $table->date('debutSondage',100);
            $table->date('finSondage',100) ->nullable();;
            $table->string('statut',100);
            $table->foreignId('usager_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campagnes');
    }
};
