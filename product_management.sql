show databases;

create database product_management;
create database product_management_test;

use product_management;
use product_management_test;

show tables;
create table product (
id int(100) not null auto_increment,

category_id int not null,
nama varchar(255) not null,
description text null,
price double default 0,
quantity int null default 0,
primary key(id),
constraint fk_product_category
foreign key(category_id) references category(id)
)engine = InnoDB;

desc product;

create table category(
id int not null auto_increment,
name varchar(100),
primary key(id)
)engine =innoDB;

create table users (
id int not null auto_increment,
name varchar(100) not null,
username varchar(100) not null,
password varchar(255) not null,
primary key(id)
)engine =innoDB;

desc users;
select * from category;






