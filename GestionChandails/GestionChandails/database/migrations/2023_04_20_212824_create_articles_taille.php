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
        Schema::create('articles_taille', function (Blueprint $table) {
            $table->primary([ 'article_id', 'taille_id']);
            $table->foreignId('taille_id')->constrained()->onDelete('cascade');;
            $table->foreignId('article_id')->constrained()->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles_taille');
    }
};
