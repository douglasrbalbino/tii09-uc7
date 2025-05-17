-- Cria o banco de dados
create database if not exists agenda;

use agenda;
 
create table if not exists contatos (
	id int auto_increment primary key,
    nome varchar(100) not null,
    telefone varchar(15) not null,
    email varchar(100) not null,
    endereco varchar(255)
);
 
-- INSERÇÃO DE DADOS INICIAIS
insert into contatos (nome, telefone, email, endereco) values 
	('mickey', '11912345678', 'mickey@mail.com', 'Rua X, Disney'),
    ('Donald', '11987654321', 'donald@mail.com', 'Ladeira X, Disney'),
	('Margarida', '11943218754', 'margarida@mail.com', 'Avenida Y, Disney');

-- INSERÇÃO COM ENDEREÇO NULO
insert into contatos (nome, telefone, email, endereco) values
	('Batman', '11911112222', 'batman@mail.com', null);
    
-- INSERÇÃO SEM O CAMPO ENDEREÇO
insert into contatos (nome, telefone, email) values
	('Superman', '11933334444', 'superman@mail.com');
