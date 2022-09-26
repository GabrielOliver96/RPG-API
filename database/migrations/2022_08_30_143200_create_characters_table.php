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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('nome')->default('Nome')->nullable();
            $table->string('jogador')->default('Jogador')->nullable();
            $table->string('cronica')->default('Crônica')->nullable();
            $table->string('natureza')->default('Natureza')->nullable();
            $table->string('comportamento')->default('Comportamento')->nullable();
            $table->string('cla')->default('Clã')->nullable();
            $table->string('geracao')->default('Geração')->nullable();
            $table->string('character_image')->nullable();

            //descrição do personagem
            $table->string('descricao_do_personagem', 500)->default('Eu me chamo... Tenho 20 anos... Sou isso... Sou aquilo...');

            //atributos fisicos
            $table->string('forca')->default('0')->nullable();
            $table->string('destreza')->default('0')->nullable();
            $table->string('vigor')->default('0')->nullable();

            //atributos sociais
            $table->string('carisma')->default('0')->nullable();
            $table->string('manipulacao')->default('0')->nullable();
            $table->string('aparencia')->default('0')->nullable();

            //atributos mentais
            $table->string('percepcao')->default('0')->nullable();
            $table->string('inteligencia')->default('0')->nullable();
            $table->string('raciocinio')->default('0')->nullable();

            //pericias
            $table->string('prontidao')->default('0')->nullable();
            $table->string('esporte')->default('0')->nullable();
            $table->string('briga')->default('0')->nullable();
            $table->string('esquiva')->default('0')->nullable(); 
            $table->string('empatia')->default('0')->nullable();
            $table->string('expressao')->default('0')->nullable();
            $table->string('intimidacao')->default('0')->nullable();
            $table->string('lideranca')->default('0')->nullable();
            $table->string('manha')->default('0')->nullable();
            $table->string('labia')->default('0')->nullable();

            $table->string('empatia_com_animais')->default('0')->nullable();
            //cada ponto adicionado inicialmente no jogo, é liberado um oficio caso jogador queira adicionar.
            $table->string('oficios')->default('0')->nullable();
            $table->string('conducao')->default('0')->nullable();
            $table->string('etiqueta')->default('0')->nullable();
            $table->string('armas_de_fogo')->default('0')->nullable();
            $table->string('armas_brancas')->default('0')->nullable();
            $table->string('performance')->default('0')->nullable();
            $table->string('seguranca')->default('0')->nullable();
            $table->string('furtividade')->default('0')->nullable();
            $table->string('sobrevivencia')->default('0')->nullable();

            //cada ponto adicionado inicialmente no jogo, é liberado um conhecimento caso jogador queira adicionar.
            $table->string('academicos')->default('0')->nullable(); 
            $table->string('computador')->default('0')->nullable();
            $table->string('financas')->default('0')->nullable();
            $table->string('investigacao')->default('0')->nullable();
            $table->string('direito')->default('0')->nullable();
            //cada ponto adicionado inicialmente no jogo, é liberado um idioma caso jogador queira adicionar.
            $table->string('linguistica')->default('0')->nullable();
            $table->string('medicina')->default('0')->nullable();
            $table->string('ocultismo')->default('0')->nullable();
            $table->string('politica')->default('0')->nullable();
            //cada ponto adicionado inicialmente no jogo, é liberado um conhecimento cientifico caso jogador queira adicionar.
            $table->string('ciencia')->default('0')->nullable();

            //virtudes físicas e mentais
            $table->string('consciencia/conviccao')->default('0')->nullable(); 
            $table->string('autocontrole/instintos')->default('0')->nullable(); 
            $table->string('coragem')->default('0')->nullable();
            
            $table->string('humanidade')->default('0')->nullable(); 
            $table->string('forca_de_vontade')->default('0')->nullable();
            $table->string('pontos_de_sangue')->default('0')->nullable();

            $table->string('vitalidade')->default('0')->nullable();
            $table->string('experiencia')->default('0')->nullable();

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
        Schema::dropIfExists('characters');
    }
};
