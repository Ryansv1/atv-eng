CREATE DATABASE lycooper;
use lycooper;

create table users (
cod_user int primary key not null auto_increment,
userLogin varchar(40),
userEmail varchar(40),
userPass varchar(40)
);

select * from users;