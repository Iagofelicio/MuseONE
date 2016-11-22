<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalizacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('localizacao', function(Blueprint $table)
		{
			$table->integer('museu_id')->default(0)->index('museu_id');
			$table->decimal('longitude', 8, 6)->default(0.000000);
			$table->decimal('latitude', 8, 6)->default(0.000000);
			$table->string('uf', 2)->nullable();
			$table->string('municipio', 45)->nullable();
			$table->string('endereco')->nullable();
			$table->string('bairro', 59)->nullable();
			$table->primary(['longitude','latitude','museu_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('localizacao');
	}

}
