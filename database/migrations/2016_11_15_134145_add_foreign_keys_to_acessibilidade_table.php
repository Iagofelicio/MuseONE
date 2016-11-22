<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAcessibilidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('acessibilidade', function(Blueprint $table)
		{
			$table->foreign('museu_id', 'acessibilidade_ibfk_1')->references('id')->on('museus')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('acessibilidade', function(Blueprint $table)
		{
			$table->dropForeign('acessibilidade_ibfk_1');
		});
	}

}
