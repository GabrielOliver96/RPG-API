<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('vitalidades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
            $table->string('escoriado')->nullable();
            $table->string('machucado')->nullable();
            $table->string('ferido')->nullable();
            $table->string('ferido_gravemente')->nullable();
            $table->string('espancado')->nullable();
            $table->string('aleijado')->nullable();
            $table->string('incapacitado')->nullable();
            $table->string('morte_final')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vitalidades');
    }
};
