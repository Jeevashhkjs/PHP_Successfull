create database JasmineJeeva;
use JasmineJeeva;
create table usersDetailsData(
id int auto_increment,
FirstName varchar(255),
LastName varchar(255),
EmailID varchar(255),
PhoneNumber int,
userName varchar(255),
Passwords varchar(255),
created_at timestamp,
updated_at timestamp,
primary key (id)
)