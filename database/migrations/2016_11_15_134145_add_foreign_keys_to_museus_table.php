<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMuseusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('museus', function(Blueprint $table)
		{
			$table->foreign('usuario_id', 'museus_ibfk_1')->references('id')->on('usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('museus', function(Blueprint $table)
		{
			$table->dropForeign('museus_ibfk_1');
		});
	}

}
