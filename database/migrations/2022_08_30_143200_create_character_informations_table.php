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
            $table->string('character_image')->nullable();
            $table->string('nome')->default('...');
            $table->string('jogador')->default('...');
            $table->string('ocupacao')->default('...');
            $table->string('idade')->default('...');
            $table->string('sexo')->default('...');
            $table->string('peso')->default('...');
            $table->string('altura')->default('...');

            //descrição do personagem
            $table->string('descricao_do_personagem', 500)->default('Eu me chamo... Tenho 20 anos... Sou isso... Sou aquilo...');

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
        Schema::dropIfExists('characters');
    }
};
