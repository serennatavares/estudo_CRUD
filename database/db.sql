create database crud_pratos_2;
use crud_pratos_2;

create table usuarios (
    id int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null
);

create table pratos (
    id int primary key auto_increment,
    nome varchar(100) not null,
    descricao text not null,
    preco decimal not null,
    categoria varchar(100) not null,

    id_usuario int not null,
    foreign key (id_usuario) references usuarios(id)
);