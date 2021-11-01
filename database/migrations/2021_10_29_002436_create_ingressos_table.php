<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngressosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingressos', function (Blueprint $table) {
            $table->increments("id");
            $table->string("titulo");
            $table->string("descricao");
            $table->string("foto");
            $table->string("local");
            $table->decimal("valor");
            $table->time("horaEvento");
            $table->date("dataEvento");
            $table->integer("categoria_id")->unsigned();
            $table->timestamps();
            
            //chave estrangeira do ingresso/categoria
            $table->foreign("categoria_id")->references("id")->on("categorias")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingressos');
    }
}
