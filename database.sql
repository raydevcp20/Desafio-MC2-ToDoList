create database list_tarefa;
use list_tarefa;

drop table usuario;
CREATE TABLE usuario(
	cod_id integer primary key AUTO_INCREMENT,
    name_user varchar(30),
	login_user varchar(50),
	senha varchar(60)
);

drop table tarefa;
CREATE TABLE tarefa(
	cod_task int primary key AUTO_INCREMENT,
	cod_id int,
	titulo varchar(30),
	descricao varchar(300),
	data_ini varchar(30),
    data_fim varchar(30),
    usuario varchar(20),
    estatus varchar(20),
	foreign key (cod_id) references usuario(cod_id)
);

select * from usuario;
select * from tarefa;








