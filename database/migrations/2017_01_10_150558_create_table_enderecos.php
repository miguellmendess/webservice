<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEnderecos extends Migration
{
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table){
            $table->increments('id');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            $table->integer('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->timestamps();

        });

    }

    public function down()
    {
        Schema::drop('enderecos');
    }

}