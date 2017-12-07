create table login(
	id_usuario int auto_increment primary key,
	username varchar(15),
    password varchar(32)
);

insert into login (username, password) value ('root', md5('root'));
select * from login;