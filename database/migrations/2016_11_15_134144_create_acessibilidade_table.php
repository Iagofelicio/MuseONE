<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcessibilidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acessibilidade', function(Blueprint $table)
		{
			$table->integer('elevador_acesso');
			$table->integer('rampa_acesso');
			$table->integer('sinalizacao_braile');
			$table->integer('etiquetas_braile');
			$table->integer('sanitario_adaptado');
			$table->integer('museu_id')->primary();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('acessibilidade');
	}

}
