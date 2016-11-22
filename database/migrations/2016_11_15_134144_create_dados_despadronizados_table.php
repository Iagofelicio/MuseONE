<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDadosDespadronizadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dados_despadronizados', function(Blueprint $table)
		{
			$table->integer('Id')->nullable();
			$table->integer('Pk_Codigo')->nullable();
			$table->decimal('Id_Longitude', 8, 6)->nullable();
			$table->decimal('Id_Latitude', 8, 6)->nullable();
			$table->integer('Id_Tipogeo')->nullable();
			$table->string('Sg_UF', 2)->nullable();
			$table->integer('Fk_Cod_IBGE')->nullable();
			$table->string('Nm_Municipio', 32)->nullable();
			$table->string('Nm_Nome', 145)->nullable();
			$table->string('En_Endereco_Original', 245)->nullable();
			$table->string('En_CEP_Original', 10)->nullable();
			$table->string('En_Tipo_Logradouro', 4)->nullable();
			$table->string('En_Nome_Logradouro', 70)->nullable();
			$table->string('En_Num', 5)->nullable();
			$table->string('En_KM', 8)->nullable();
			$table->string('En_Complemento', 149)->nullable();
			$table->string('En_Bairro', 59)->nullable();
			$table->string('En_CEP', 9)->nullable();
			$table->string('Nr_DDD', 2)->nullable();
			$table->string('Nr_Telefone1', 9)->nullable();
			$table->string('Nr_Telefone2', 9)->nullable();
			$table->string('Nr_Telefone3', 9)->nullable();
			$table->string('Lk_Site', 94)->nullable();
			$table->boolean('Id_Esfera')->nullable();
			$table->string('Id_Tipo_Esfera', 2)->nullable();
			$table->string('Ds_Tipo_Esfera', 101)->nullable();
			$table->string('Cod_CNPJ', 18)->nullable();
			$table->string('Cod_Sniic', 5)->nullable();
			$table->string('Nm_Local', 137)->nullable();
			$table->string('Ds_ano_criacao', 14)->nullable();
			$table->string('Ds_ano_abertura', 14)->nullable();
			$table->integer('Id_orcamento_proprio')->nullable();
			$table->integer('Id_situacao')->nullable();
			$table->integer('Id_ingresso_cobrado')->nullable();
			$table->string('Ds_ingresso_valor', 246)->nullable();
			$table->integer('Qt_bens_acervo')->nullable();
			$table->integer('Id_bens_exatidao')->nullable();
			$table->string('Qt_acervo_antropologia_etnografia', 5)->nullable();
			$table->string('Qt_acervo_arqueologia', 7)->nullable();
			$table->string('Qt_acervo_artes_visuais', 6)->nullable();
			$table->string('Qt_acervo_cienciasnaturais_historianatural', 8)->nullable();
			$table->string('Qt_acervo_ciencia_tecnologia', 4)->nullable();
			$table->string('Qt_acervo_historia', 7)->nullable();
			$table->string('Qt_acervo_imagem_som', 7)->nullable();
			$table->string('Qt_acervo_virtual', 5)->nullable();
			$table->string('Qt_acervo_arquivistico', 6)->nullable();
			$table->string('Qt_acervo_biblioteconomico', 7)->nullable();
			$table->string('Qt_acervo_documental', 6)->nullable();
			$table->string('Qt_acervo_outros', 6)->nullable();
			$table->integer('Id_infra_turistas_estrangeiros')->nullable();
			$table->integer('Id_infra_turistas_sinalizacao')->nullable();
			$table->string('Ds_sinalizacao_idioma', 145)->nullable();
			$table->integer('Id_infra_turistas_etiquetas')->nullable();
			$table->string('Ds_etiquetas_idioma', 65)->nullable();
			$table->integer('Id_infra_turistas_publicacoes')->nullable();
			$table->string('Ds_publicacoes_idioma', 154)->nullable();
			$table->integer('Id_infra_turistas_outros')->nullable();
			$table->string('Ds_outros_idioma', 254)->nullable();
			$table->integer('Id_bebedouro')->nullable();
			$table->integer('Id_estacionamento')->nullable();
			$table->integer('Id_lanchonete_retaurante')->nullable();
			$table->integer('Id_livraria')->nullable();
			$table->integer('Id_loja')->nullable();
			$table->integer('Id_sanitarios')->nullable();
			$table->integer('Id_telefone_publico')->nullable();
			$table->integer('Id_outras_instalacoes')->nullable();
			$table->string('Ds_outras_instalacoes', 243)->nullable();
			$table->integer('Id_pne_vagas_exclusivas_estacionamento')->nullable();
			$table->integer('Id_pne_elevadores_acessiveis')->nullable();
			$table->integer('Id_pne_rampa_de_acesso')->nullable();
			$table->integer('Id_pne_sanitarios_adaptados')->nullable();
			$table->integer('Id_pne_sinalizacao_braile')->nullable();
			$table->integer('Id_pne_etiquetas_braile')->nullable();
			$table->integer('Id_pne_outros_1')->nullable();
			$table->string('Id_medidas_preventivas', 1)->nullable();
			$table->integer('Id_medidas_preventivas_treinamento_profissionais')->nullable();
			$table->integer('Id_medidas_preventivas_brigada')->nullable();
			$table->integer('Id_medidas_preventivas_revisao_extintores')->nullable();
			$table->integer('Id_medidas_preventivas_revisao_rede_eletrica')->nullable();
			$table->integer('Id_medidas_preventivas_outras')->nullable();
			$table->string('Id_visitas_guiadas', 1)->nullable();
			$table->string('Id_visitas_guiadas_audio', 1)->nullable();
			$table->string('Id_visitas_guiadas_monitores', 1)->nullable();
			$table->string('Id_agendamento', 1)->nullable();
			$table->string('Id_biblioteca', 1)->nullable();
			$table->string('Id_biblioteca_acesso_ao_publico', 1)->nullable();
			$table->string('Ds_tipologia_abrangencia_acervo_biblioteca', 798)->nullable();
			$table->string('Id_arquivo_historico', 1)->nullable();
			$table->string('Id_arquivo_acesso_ao_publico', 1)->nullable();
			$table->string('Ds_tipologia_abrangencia_acervo_arquivo', 3284)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dados_despadronizados');
	}

}
