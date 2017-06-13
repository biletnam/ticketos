CREATE DATABASE ticketos;

CREATE TABLE users(
	id serial,
	codname varchar(10),
	passwd varchar(30),
	email varchar(50),
	type varchar(10),
	estate char(1),
	date_create date default date(now())
);


CREATE TABLE tickets(
	id serial,
	name text,
	description text,
	priority integer,
	date_submit date default date(now()),
	id_user_creator integer,
	id_user_resolve integer,
	state char(1)
);

CREATE TABLE tickets_follow(
	id serial,
	id_ticket integer,
	id_user_follow integer,
	note_follow text,
	date_follow date default date(now())
);
	
