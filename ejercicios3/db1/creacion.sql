create database palabras;
use palabras;
create table palabras(
                         id_palabra INT AUTO_INCREMENT,
                         palabra varchar(30) not null ,
                         constraint palabras_pk primary key (id_palabra),
                         constraint palabra_uk1 unique (palabra)
);

create user palabras@localhost identified by 'palabras';
create user palabra@localhost identified by 'shruighiaviiewh';

grant select, insert, update, delete on palabras.* to palabra@localhost, palabras@localhost;


