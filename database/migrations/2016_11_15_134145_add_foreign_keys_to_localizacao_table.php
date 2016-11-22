<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLocalizacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('localizacao', function(Blueprint $table)
		{
			$table->foreign('museu_id', 'localizacao_ibfk_1')->references('id')->on('museus')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('localizacao', function(Blueprint $table)
		{
			$table->dropForeign('localizacao_ibfk_1');
		});
	}

}
