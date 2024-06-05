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
        Schema::create('heroes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pokemon');
            $table->string('type');
            $table->string('type2');
            $table->string('sous_evolution');
            $table->string('evolution');
            $table->string('mega_evolution');
            $table->string('forme_normale');
            $table->string('generation');
            $table->string('region');

            $table->timestamps();


            $table->foreignId('skill_id')->default(1)->constrained();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heros');
    }
};
