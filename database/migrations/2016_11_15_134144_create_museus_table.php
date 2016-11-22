<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMuseusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('museus', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('cnpj', 18)->nullable();
			$table->string('nome', 145)->nullable();
			$table->string('site', 94)->nullable();
			$table->string('esfera', 45)->nullable();
			$table->integer('ano_criacao')->nullable();
			$table->integer('ano_abertura')->nullable();
			$table->integer('usuario_id')->nullable()->index('usuario_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('museus');
	}

}
