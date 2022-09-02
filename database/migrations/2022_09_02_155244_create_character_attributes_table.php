<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')->references('id')->on('character_informations');

            //atributos fisicos
            $table->string('forca')->default(0);
            $table->string('destreza')->default(0);
            $table->string('agilidade')->default(0);

            //atributos sociais
            $table->string('carisma')->default(0);
            $table->string('manipulacao')->default(0);
            $table->string('aparencia')->default(0);

            //atributos mentais
            $table->string('percepcao')->default(0);
            $table->string('inteligencia')->default(0);
            $table->string('raciocinio')->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_attributes');
    }
};
