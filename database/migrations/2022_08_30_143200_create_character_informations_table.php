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
        Schema::create('character_informations', function (Blueprint $table) {
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
            $table->string('descricao_do_personagem')->default('Eu me chamo... Tenho 20 anos... Sou isso... Sou aquilo...');

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
        Schema::dropIfExists('character_informations');
    }
};
