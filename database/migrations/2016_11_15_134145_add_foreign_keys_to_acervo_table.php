<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAcervoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('acervo', function(Blueprint $table)
		{
			$table->foreign('museu_id', 'acervo_ibfk_1')->references('id')->on('museus')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('acervo', function(Blueprint $table)
		{
			$table->dropForeign('acervo_ibfk_1');
		});
	}

}
