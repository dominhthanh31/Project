<?php
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'insurance');

const SQL_CREATE_DATABASE = 'create database if not exists '.DATABASE;


const SQL_CREATE_TABLE_ACCOUNT = 'create table if not exists account (
	id int primary key auto_increment,
	email varchar(150),
	password varchar(32),
	fullname varchar(100),
	phoneNo varchar(100),
	address varchar(255),
	role_id int primary key auto_increment,
	create_at datetime,
	upadate_at datetime
)';

const SQL_CREATE_TABLE_ROLE = 'create table if not exists role (
	id int primary key auto_increment,
	name varchar(100)
	
)';