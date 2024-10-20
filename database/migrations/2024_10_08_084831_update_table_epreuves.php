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
        Schema::table('epreuves', function (Blueprint $table) {
            //$table->unsignedBigInteger( 'matiere_id');
            
            //$table->index('matiere_id');

            //$table->foreign('matiere_id')->references('id')->on('matieres');
            $table->foreignId('matiere_id')->constrained('matieres');
        });     }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
