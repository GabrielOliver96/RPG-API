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
        Schema::create('character_skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')->references('id')->on('character_informations');
            
            //pericias
            $table->string('prontidao')->default(0);
            $table->string('esporte')->default(0);
            $table->string('briga')->default(0);
            $table->string('armas_brancas')->default(0);
            $table->string('armas_de_fogo')->default(0);
            $table->string('esquiva')->default(0); 
            $table->string('empatia')->default(0);
            $table->string('expressao')->default(0);
            $table->string('intimidacao')->default(0);
            $table->string('lideranca')->default(0);
            $table->string('manha')->default(0);
            $table->string('labia')->default(0);
            $table->string('empatia_com_animais')->default(0);
            //cada ponto adicionado inicialmente no jogo, é liberado um oficio caso jogador queira adicionar.
            $table->string('oficios')->default(0);
            $table->string('conducao')->default(0);
            $table->string('etiqueta')->default(0);
            $table->string('performance')->default(0);
            $table->string('seguranca')->default(0);
            $table->string('furtividade')->default(0);
            $table->string('sobrevivencia')->default(0);
            //cada ponto adicionado inicialmente no jogo, é liberado um conhecimento caso jogador queira adicionar.
            $table->string('academico')->default(0); 
            $table->string('computador')->default(0);
            $table->string('investigacao')->default(0);
            //cada ponto adicionado inicialmente no jogo, é liberado um idioma caso jogador queira adicionar.
            $table->string('idioma')->default(0);
            $table->string('medicina')->default(0);
            $table->string('ocultismo')->default(0);
            //cada ponto adicionado inicialmente no jogo, é liberado um conhecimento cientifico caso jogador queira adicionar.
            $table->string('ciencia')->default(0);

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
        Schema::dropIfExists('character_skills');
    }
};
