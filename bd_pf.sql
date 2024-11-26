create database bd_pf;
use bd_pf;


CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) UNIQUE NOT NULL,
    telefone VARCHAR(15),
	aniversario DATE,
    senha VARCHAR(255) NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
select * from usuarios;
drop table usuarios;


create table ADM (
    id int auto_increment primary key,
    cpf varchar(30) not null,
    senha varchar(30) not null);
INSERT INTO ADM (cpf, senha) values ('13607985790@cefet-rj.br','123');
INSERT INTO ADM (cpf, senha) values ('123@cefet-rj.br','123');
select * from ADM;
drop table ADM;


CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT NOT NULL,
    categoria VARCHAR(50),
    imagem VARCHAR(255),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
select * from produtos;