<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInfraestruturaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('infraestrutura', function(Blueprint $table)
		{
			$table->foreign('museu_id', 'infraestrutura_ibfk_1')->references('id')->on('museus')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('infraestrutura', function(Blueprint $table)
		{
			$table->dropForeign('infraestrutura_ibfk_1');
		});
	}

}
