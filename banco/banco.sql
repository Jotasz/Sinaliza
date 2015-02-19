CREATE DATABASE sinal;

USE sinal;

create table aluno (
	id integer primary key NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(80) NOT NULL,
	email varchar(40) NOT NULL,
	senha varchar(15) NOT NULL,
	data varchar(10),
	modulo integer(1)
);

create table modulo (
	id integer primary key NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(50) NOT NULL,
	descricao TEXT NOT NULL,
	tipo integer(1) NOT NULL
);

create table  testesrealizados (
	id integer primary key NOT NULL AUTO_INCREMENT PRIMARY KEY,
	idaluno integer REFERENCES aluno (id) ON DELETE CASCADE,
	tipo integer(1) NOT NULL,
	nota REAL NOT NULL
);

create table  questao (
	id integer primary key NOT NULL AUTO_INCREMENT PRIMARY KEY,
	tipo integer(1) NOT NULL,
	pergunta TEXT NOT NULL,
	alternativa1 TEXT NOT NULL,
	alternativa2 TEXT NOT NULL,
	alternativa3 TEXT NOT NULL,
	alternativa4 TEXT NOT NULL,
	resp integer(1) NOT NULL,
	figura TEXT
);

create table  conteudo (
	id integer primary key NOT NULL AUTO_INCREMENT PRIMARY KEY,
	idmodulo integer(1) REFERENCES modulo (id) ON DELETE CASCADE,
	nome TEXT NOT NULL,
	texto TEXT NOT NULL,
	figura TEXT
);

/*CHARACTER SET utf8 COLLATE utf8_bin*/