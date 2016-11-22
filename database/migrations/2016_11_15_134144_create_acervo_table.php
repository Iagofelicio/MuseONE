<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcervoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acervo', function(Blueprint $table)
		{
			$table->integer('museu_id')->primary();
			$table->integer('antropologia_etnografia')->nullable();
			$table->integer('arqueologia')->nullable();
			$table->integer('artes_visuais')->nullable();
			$table->integer('cienciasnaturais_historianatural')->nullable();
			$table->integer('ciencia_tecnologia')->nullable();
			$table->integer('historia')->nullable();
			$table->integer('imagem_som')->nullable();
			$table->integer('virtuais')->nullable();
			$table->integer('arquivistico')->nullable();
			$table->integer('biblioteconomico')->nullable();
			$table->integer('documental')->nullable();
			$table->integer('outros')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('acervo');
	}

}
