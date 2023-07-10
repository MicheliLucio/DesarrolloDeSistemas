drop database if exists mirrorbdd;
create database mirrorbdd;
use mirrorbdd;

create table usuario(
	idUsuario integer not null auto_increment,
	nickname varchar(50),
	mail varchar(100),
	foto varchar(255),
	contraseña varchar(25),
	descripcion varchar(255),
	primary key (idUsuario)
);
create table videojuegos(
	idVideojuego integer not null auto_increment,
	titulo varchar(50),
	empresaDesarrolladora varchar(50),
	genero varchar(50),
	archivos varchar(255),
	usuarioQueLoSubio varchar(50),
	descripcion varchar(255),
	fechaDeIngreso date,
	fechaDeLanzamiento date,
	imagen varchar(255),
	primary key(idVideojuego)
);
create table noticias(
	idNoticias integer not null auto_increment,
	idUsuario int,
	foto varchar(255),
	descripcion varchar(255),
	fecha date,
	primary key (idNoticias),
	foreign key(idUsuario) references usuario(idUsuario)
);



insert into usuario(nickname, mail, foto, contraseña, descripcion) values ("Ernesto Mate", "ernestomate01@gmail.com", "imagenes-Noticias/foto-usuario.png", "ernesto123", "Creador De Contenido");
insert into noticias(idUsuario, foto, descripcion, fecha) values (1, "panelNoticias/juego x.png", "Est�s aqu� por una raz�n. La enorme instalaci�n de investigaci�n de la UAC...", NOW());
 