<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEventoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('evento', function(Blueprint $table)
		{
			$table->foreign('museu_id', 'evento_ibfk_1')->references('id')->on('museus')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('evento', function(Blueprint $table)
		{
			$table->dropForeign('evento_ibfk_1');
		});
	}

}
