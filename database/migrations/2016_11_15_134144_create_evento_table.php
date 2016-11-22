<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evento', function(Blueprint $table)
		{
			$table->integer('nome');
			$table->text('descricao');
			$table->date('data_inicio');
			$table->date('data_fim');
			$table->integer('idade_censura');
			$table->integer('id');
			$table->integer('museu_id')->index('museu_id');
			$table->primary(['id','museu_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evento');
	}

}
