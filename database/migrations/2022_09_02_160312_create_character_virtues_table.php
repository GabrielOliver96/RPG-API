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
        Schema::create('character_virtues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')->references('id')->on('character_informations');

            //virtudes físicas e mentais
            $table->string('vigor')->default(0);
            $table->string('consciencia')->default(0); //ao tentar realizar algo eticamente questionavel, é necessário uma rolagem. 
            $table->string('autocontrole')->default(0); //após surtos, quando a sanidade chega a zero, é necessário rolar autocontrole.
            $table->string('coragem')->default(0); //usado para testes de perca de sanidade, ou situações de intimidação.
            $table->string('humanidade')->default(0); //define o quão distante de sua humanidade ele está, ele atributo diminui conforme o jogador pratica atos horrendos e crueis contra outros.
            $table->string('pontos_de_vida')->default(0);
            $table->string('sanidade')->default(0); //define o seu nivel de sanidade, ao chegar a zero, o jogador entra em estado de choque, ou fica louco propriamente dito.
            
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
        Schema::dropIfExists('character_virtues');
    }
};
