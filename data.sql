create database if not exists cadastro;
create table if not exists usuarios (
codigo int not null auto_increment,
nome varchar(50) not null,
email varchar(50) not null unique,
profissao varchar(50) not null,
primary key (codigo)
) default charset=utf8;
