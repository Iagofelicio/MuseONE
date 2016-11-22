use museONE;

/* TRATAMENTO DE ERROS */
/* Criação das tabelas */
CREATE TABLE dados_despadronizados LIKE culturaeduca_museus;

/* Migração dos dados */
INSERT INTO dados_despadronizados select * from culturaeduca_museus where id='802';
DELETE FROM culturaeduca_museus where id='802';
INSERT INTO dados_despadronizados select * from culturaeduca_museus where id='578';
DELETE FROM culturaeduca_museus where id='578';
INSERT INTO dados_despadronizados select * from culturaeduca_museus where Ds_ano_abertura LIKE 'D%';
DELETE FROM culturaeduca_museus where Ds_ano_abertura LIKE 'D%';
INSERT INTO dados_despadronizados select * from culturaeduca_museus where Ds_ano_criacao LIKE 'D%';
DELETE FROM culturaeduca_museus where Ds_ano_criacao LIKE 'D%';

/* INSERT INTO dados_despadronizados select * from culturaeduca_museus where id='2963';
DELETE FROM culturaeduca_museus where id='2963';
INSERT INTO dados_despadronizados select * from culturaeduca_museus where id='2842';
DELETE FROM culturaeduca_museus where id='2842'; */

/* Transformação Colunas da Base Original*/
alter table culturaeduca_museus modify column Cod_CNPJ varchar(18);
alter table culturaeduca_museus modify column Id_Esfera tinyint;
UPDATE culturaeduca_museus set Ds_ano_abertura=NULL where Ds_ano_abertura=' ';
UPDATE culturaeduca_museus set Ds_ano_criacao=NULL where Ds_ano_criacao=' ';
update culturaeduca_museus set Qt_acervo_antropologia_etnografia=0 where Qt_acervo_antropologia_etnografia=' ';
update culturaeduca_museus set Qt_acervo_arqueologia=0 where Qt_acervo_arqueologia=' ';
update culturaeduca_museus set Qt_acervo_artes_visuais=0 where Qt_acervo_artes_visuais=' ';
update culturaeduca_museus set Qt_acervo_cienciasnaturais_historianatural=0 where Qt_acervo_cienciasnaturais_historianatural=' ';
update culturaeduca_museus set Qt_acervo_ciencia_tecnologia=0 where Qt_acervo_ciencia_tecnologia=' ';
update culturaeduca_museus set Qt_acervo_historia=0 where Qt_acervo_historia=' ';
update culturaeduca_museus set Qt_acervo_imagem_som=0 where Qt_acervo_imagem_som=' ';
update culturaeduca_museus set Qt_acervo_virtual=0 where Qt_acervo_virtual=' ';
update culturaeduca_museus set Qt_acervo_biblioteconomico=0 where Qt_acervo_biblioteconomico=' ';
update culturaeduca_museus set Qt_acervo_documental=0 where Qt_acervo_documental=' ';
update culturaeduca_museus set Qt_acervo_arquivistico=0 where Qt_acervo_arquivistico=' ';
update culturaeduca_museus set Qt_acervo_outros=0 where Qt_acervo_outros=' ';
update culturaeduca_museus set Id_agendamento=0 where Id_agendamento=' ';
update culturaeduca_museus set Id_visitas_guiadas=0 where Id_visitas_guiadas=' ';
update culturaeduca_museus set Id_visitas_guiadas_audio=0 where Id_visitas_guiadas_audio=' ';
update culturaeduca_museus set Nr_DDD=0 where Nr_DDD=' ';


alter table culturaeduca_museus modify column Id_visitas_guiadas int;
alter table culturaeduca_museus modify column Id_agendamento int;
alter table culturaeduca_museus modify column Id_visitas_guiadas_audio int; 
alter table culturaeduca_museus modify column Qt_acervo_antropologia_etnografia int;
alter table culturaeduca_museus modify column Ds_ano_abertura int;
alter table culturaeduca_museus modify column Ds_ano_criacao int;
alter table culturaeduca_museus modify column Qt_acervo_arqueologia int;
alter table culturaeduca_museus modify column Qt_acervo_artes_visuais int;
alter table culturaeduca_museus modify column Qt_acervo_cienciasnaturais_historianatural int;
alter table culturaeduca_museus modify column Qt_acervo_ciencia_tecnologia int;
alter table culturaeduca_museus modify column Qt_acervo_historia int;
alter table culturaeduca_museus modify column Qt_acervo_imagem_som int;
alter table culturaeduca_museus modify column Qt_acervo_virtual int;
alter table culturaeduca_museus modify column Qt_acervo_biblioteconomico int;
alter table culturaeduca_museus modify column Qt_acervo_documental int;
alter table culturaeduca_museus modify column Qt_acervo_arquivistico int;
alter table culturaeduca_museus modify column Qt_acervo_outros int;
alter table culturaeduca_museus modify column Ds_sinalizacao_idioma varchar(145);
ALTER TABLE culturaeduca_museus ADD id2 INT primary key AUTO_INCREMENT;


/* **************************************** */ 
/* Criação Tabela USUARIO */
create table usuario (
	id int primary key not null auto_increment, 
    nome varchar(145) not null, 
    email varchar(75) not null unique, 
    senha varchar(45) not null, 
    permissao enum('admin','curador'));

/* Criação de um curador Default para ser atribuído a todos os museus */
insert into usuario(nome,email,senha,permissao) values ('Curador Default','curador@default.com','defaut','curador');

/* **************************************** */ 
/* Criação Tabela MUSEU */
create table museus (
	id int primary key not null auto_increment, 
	cnpj varchar(18), 
    nome varchar(145), 
    site varchar(94), 
    esfera varchar(45), 
    ano_criacao int, 
    ano_abertura int, 
    usuario_id int, 
    foreign key(usuario_id) references usuario(id));

/* Transferência dos dados */
insert into museus (
	cnpj, 
    nome, 
    site, 
    esfera, 
    ano_criacao, 
    ano_abertura) 
	select 
		Cod_CNPJ, 
        Nm_Nome,
        Lk_Site,
        Id_Esfera, 
        Ds_ano_criacao, 
        Ds_ano_abertura
    from culturaeduca_museus;

/* **************************************** */ 
/* Criação Tabela Eventos*/
create table evento (
	nome int not null, 
    descricao text(255) not null, 
    data_inicio date not null, 
    data_fim date not null, 
    idade_censura int not null,
    id int not null,
    museu_id int not null,
    primary key (id, museu_id), 
    foreign key (museu_id) references museus (id) on delete cascade
    );

/* **************************************** */ 
/* Criação Tabela Acervo */ 

/* Criação da tabela */
create table acervo (
	museu_id int primary key,
	antropologia_etnografia int, 
    arqueologia int, 
    artes_visuais int, 
    cienciasnaturais_historianatural int, 
    ciencia_tecnologia int, 
    historia int, 
    imagem_som int, 
    virtuais int, 
    arquivistico int, 
    biblioteconomico int, 
    documental int, 
    outros int,
    foreign key (museu_id) references museus(id) on delete cascade);

/* Transferência dos dados */
insert into acervo (
	museu_id,
	antropologia_etnografia, 
    arqueologia, 
    artes_visuais, 
    cienciasnaturais_historianatural, 
    ciencia_tecnologia, 
    historia, 
    imagem_som, 
    virtuais, 
    arquivistico, 
    biblioteconomico, 
    documental, 
    outros) 
    select 
		id2,
		Qt_acervo_antropologia_etnografia, 
		Qt_acervo_arqueologia, 
		Qt_acervo_artes_visuais,
		Qt_acervo_cienciasnaturais_historianatural, 
		Qt_acervo_ciencia_tecnologia,
		Qt_acervo_historia, 
		Qt_acervo_imagem_som, 
		Qt_acervo_virtual,
		Qt_acervo_arquivistico,
		Qt_acervo_biblioteconomico,
		Qt_acervo_documental, 
		Qt_acervo_outros
    from culturaeduca_museus;

/* **************************************** */ 
/* Criação Tabela Visitas */

/* Criação da tabela */
create table visitas (
agendamento int not null, 
guiadas int not null, 
guiadas_audio int not null, 
museu_id int primary key, 
foreign key(museu_id) references museus(id) on delete cascade);

/* Transferencia dos dados */
insert into visitas (
    museu_id,
    agendamento, 
    guiadas, 
	guiadas_audio) 
	select 
		id2,
		Id_agendamento, 
		Id_visitas_guiadas, 
		Id_visitas_guiadas_audio
    from culturaeduca_museus;

/* **************************************** */ 
/* Criação Tabela Localização*/
drop table localizacao;

create table localizacao (
	museu_id int,
	longitude decimal(8,6), 
    latitude decimal(8,6), 
    uf varchar(2), 
    municipio varchar(45), 
    endereco varchar(255), 
    bairro varchar(59), 
    primary key(longitude, latitude, museu_id),
    foreign key (museu_id) references museus(id));

/* Transferência de Dados */

insert into localizacao (
	museu_id,
	longitude, 
    latitude, 
    uf, 
    municipio, 
    endereco, 
    bairro)
    select
		id2,
		Id_Longitude,
		Id_Latitude,
		Sg_UF,
		Nm_Municipio,
		En_Endereco_Original,
		En_Bairro
    from culturaeduca_museus;
    
/* **************************************** */ 
/* Criação Tabela Contato*/
create table contato (
	telefone varchar(9),
	ddd int,
	museu_id int,
    primary key(telefone, ddd, museu_id),
	foreign key(museu_id) references museus(id) on delete cascade
    );

/* Transferência de Dados */
insert into contato (
	ddd,
    telefone,
    museu_id) 
    select
		Nr_DDD,
		Nr_Telefone1,
		id2
    from culturaeduca_museus;

/* **************************************** */ 
/* Criação Tabela Infraestrutura*/

create table infraestrutura(
	turistas_estrangeiros int not null,
	turistas_sinalizacao int not null,
    sinalizacao_idioma varchar(145) not null,
    turistas_etiqueta int not null,
    etiqueta_idioma varchar(65),
    turistas_publicacoes int not null,
    publicacoes_idioma varchar(154),
    estacionamento int not null,
    lanchonete_restaurante int not null,
    sanitarios int not null,
    museu_id int primary key not null,
    foreign key(museu_id) references museus(id)
);

/* Transferência de Dados */

insert into infraestrutura(
	turistas_estrangeiros,
    turistas_sinalizacao,
    sinalizacao_idioma,
    turistas_etiqueta,
    etiqueta_idioma,
    turistas_publicacoes,
    publicacoes_idioma,
    estacionamento,
    lanchonete_restaurante,
    sanitarios,
    museu_id)
    select
    Id_infra_turistas_estrangeiros,
    Id_infra_turistas_sinalizacao,
    Ds_sinalizacao_idioma,
	Id_infra_turistas_etiquetas,
    Ds_etiquetas_idioma,
    Id_infra_turistas_publicacoes,
    Ds_publicacoes_idioma,
    Id_estacionamento,
    Id_lanchonete_retaurante,
    Id_sanitarios,
    id2
    from culturaeduca_museus;
    
/* Criação da tabela Acessibilidade */
    
create table acessibilidade(
	elevador_acesso int not null,
    rampa_acesso int not null,
    sinalizacao_braile int not null,
    etiquetas_braile int not null,
    sanitario_adaptado int not null,
    museu_id int primary key not null,
    foreign key(museu_id) references museus(id)
);

/* Inserção de dados */

insert into acessibilidade(
	elevador_acesso,
	rampa_acesso,
    sinalizacao_braile,
    etiquetas_braile,
    sanitario_adaptado,
    museu_id)
select
	Id_pne_elevadores_acessiveis,
	Id_pne_rampa_de_acesso,
	Id_pne_sinalizacao_braile,
	Id_pne_etiquetas_braile,
	Id_pne_sanitarios_adaptados,
	id2
from culturaeduca_museus;