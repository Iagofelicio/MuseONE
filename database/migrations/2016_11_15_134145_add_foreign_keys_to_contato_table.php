<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContatoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contato', function(Blueprint $table)
		{
			$table->foreign('museu_id', 'contato_ibfk_1')->references('id')->on('museus')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contato', function(Blueprint $table)
		{
			$table->dropForeign('contato_ibfk_1');
		});
	}

}
