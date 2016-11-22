<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContatoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contato', function(Blueprint $table)
		{
			$table->string('telefone', 9)->default('');
			$table->integer('ddd')->default(0);
			$table->integer('museu_id')->default(0)->index('museu_id');
			$table->primary(['telefone','ddd','museu_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contato');
	}

}
