<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVisitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('visitas', function(Blueprint $table)
		{
			$table->foreign('museu_id', 'visitas_ibfk_1')->references('id')->on('museus')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('visitas', function(Blueprint $table)
		{
			$table->dropForeign('visitas_ibfk_1');
		});
	}

}
