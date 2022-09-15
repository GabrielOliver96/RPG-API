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
            $table->string('nome')->default('Nome')->nullable();
            $table->string('jogador')->default('Jogador')->nullable();
            $table->string('ocupacao')->default('Ocupação')->nullable();
            $table->string('idade')->default('Idade')->nullable();
            $table->string('sexo')->default('Sexo')->nullable();
            $table->string('peso')->default('Peso')->nullable();
            $table->string('altura')->default('Altura')->nullable();

            //descrição do personagem
            $table->string('descricao_do_personagem', 500)->default('Eu me chamo... Tenho 20 anos... Sou isso... Sou aquilo...');

            //atributos fisicos
            $table->string('forca')->default('0')->nullable();
            $table->string('destreza')->default('0')->nullable();
            $table->string('agilidade')->default('0')->nullable();

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
            $table->string('armas_brancas')->default('0')->nullable();
            $table->string('armas_de_fogo')->default('0')->nullable();
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
            $table->string('performance')->default('0')->nullable();
            $table->string('seguranca')->default('0')->nullable();
            $table->string('furtividade')->default('0')->nullable();
            $table->string('sobrevivencia')->default('0')->nullable();
            //cada ponto adicionado inicialmente no jogo, é liberado um conhecimento caso jogador queira adicionar.
            $table->string('academico')->default('0')->nullable(); 
            $table->string('computador')->default('0')->nullable();
            $table->string('investigacao')->default('0')->nullable();
            //cada ponto adicionado inicialmente no jogo, é liberado um idioma caso jogador queira adicionar.
            $table->string('idioma')->default('0')->nullable();
            $table->string('medicina')->default('0')->nullable();
            $table->string('ocultismo')->default('0')->nullable();
            //cada ponto adicionado inicialmente no jogo, é liberado um conhecimento cientifico caso jogador queira adicionar.
            $table->string('ciencia')->default('0')->nullable();

            //virtudes físicas e mentais
            $table->string('vigor')->default('0')->nullable();
            $table->string('consciencia')->default('0')->nullable(); //ao tentar realizar algo eticamente questionavel, é necessário uma rolagem. 
            $table->string('autocontrole')->default('0')->nullable(); //após surtos, quando a sanidade chega a zero, é necessário rolar autocontrole.
            $table->string('coragem')->default('0')->nullable(); //usado para testes de perca de sanidade, ou situações de intimidação.
            $table->string('humanidade')->default('0')->nullable(); //define o quão distante de sua humanidade ele está, ele atributo diminui conforme o jogador pratica atos horrendos e crueis contra outros.
            $table->string('pontos_de_vida')->default('0')->nullable();
            $table->string('sanidade')->default('0')->nullable(); //define o seu nivel de sanidade, ao chegar a zero, o jogador entra em estado de choque, ou fica louco propriamente dito.

        
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
