<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInfraestruturaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('infraestrutura', function(Blueprint $table)
		{
			$table->integer('turistas_estrangeiros');
			$table->integer('turistas_sinalizacao');
			$table->string('sinalizacao_idioma', 145);
			$table->integer('turistas_etiqueta');
			$table->string('etiqueta_idioma', 65)->nullable();
			$table->integer('turistas_publicacoes');
			$table->string('publicacoes_idioma', 154)->nullable();
			$table->integer('estacionamento');
			$table->integer('lanchonete_restaurante');
			$table->integer('sanitarios');
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
		Schema::drop('infraestrutura');
	}

}
