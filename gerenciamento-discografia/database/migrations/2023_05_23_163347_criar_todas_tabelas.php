<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('albuns', function (Blueprint $table)
        {
            $table->increments('id_album');
            $table->string('nome', 100)->nullable(false);
            $table->string('descricao', 255)->nullable(false);
            $table->integer('excluido')->default(0);
            $table->timestamps();
        });

        Schema::create('faixas', function (Blueprint $table)
        {
            $table->increments('id_faixa');
            $table->integer('id_album')->unsigned();
            $table->foreign('id_album')->references('id_album')->on('albuns');
            $table->string('nome', 100)->nullable(false);
            $table->integer('excluido')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('albuns');
        Schema::dropIfExists('faixas');
    }
};
