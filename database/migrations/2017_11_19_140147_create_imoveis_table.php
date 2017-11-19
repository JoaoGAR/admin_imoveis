<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
           $table->increments('id');
            $table->string('titulo_imovel');
            $table->int('cod_imovel')->unique();
            $table->int('id_tipo_imovel');
            $table->int('id_endereco_imovel');
            $table->real('preco_imovel');
            $table->real('area_imovel');
            $table->int('qtd_dormitorios');
            $table->text('descricao_imovel');
            $table->string('imagem_imovel');
            $table->rememberToken();
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
        Schema::dropIfExists('imoveis');
    }
}
