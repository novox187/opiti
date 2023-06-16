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
        Schema::create('reunions', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->boolean('estado');

            /* Esta es la llave foranea */
            $table->unsignedBigInteger('client_id')->unique();

            /* Estas son las restricciones de la llave foranea */
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reunions');
    }
};
