-- DATABASE PRUEBA
CREATE DATABASE IF NOT EXISTS prueba;

--
USE prueba;

--
CREATE TABLE IF NOT EXISTS tbl_users
(
	id integer not null primary key auto_increment,
	name varchar(128),
	last_name varchar(128),
	sex varchar(12),
	identification varchar(128),
	address varchar(128),
	phone varchar(20),
	home_phone varchar(20),
	login varchar(128),
	password varchar(128),
	email varchar(128),
	active boolean default true,
	create_uid integer,
	create_date timestamp default current_timestamp on update current_timestamp,
	write_date timestamp default current_timestamp on update current_timestamp,
	write_uid integer,
	profile TEXT,
	CONSTRAINT FK_users_create FOREIGN KEY (create_uid)
		REFERENCES tbl_users (id) MATCH SIMPLE ON UPDATE NO ACTION ON DELETE SET NULL,
	CONSTRAINT FK_users_write FOREIGN KEY (write_uid)
		REFERENCES tbl_users (id) MATCH SIMPLE ON UPDATE NO ACTION ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS tbl_products
(
	id integer not null primary key auto_increment,
	name varchar(128),
	description text,
	type_product varchar(70),
	barcode varchar(13),
	code varchar(7),
	price numeric,
	quantity numeric,
	warranty double precision,
	list_price numeric,
	lot_id integer,
	new_quantity numeric,
	location varchar(128), 
	description_purchase text,
	description_sale text,
	date_inventory date,
	active boolean default true,
	create_uid integer,
	create_date timestamp default current_timestamp on update current_timestamp,
	write_date timestamp default current_timestamp on update current_timestamp,
	write_uid integer,
	CONSTRAINT FK_products_create FOREIGN KEY (create_uid)
		REFERENCES tbl_users (id) MATCH SIMPLE ON UPDATE NO ACTION ON DELETE SET NULL,
	CONSTRAINT FK_products_write FOREIGN KEY (write_uid)
		REFERENCES tbl_users (id) MATCH SIMPLE ON UPDATE NO ACTION ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS tbl_partners
(
	id integer not null primary key auto_increment,
	name varchar(128),
	last_name varchar(128),
	identification varchar(128),
	sex varchar(12),
	state_civil varchar(45),
	address varchar(128),
	zip varchar(24),
	email varchar(128),
	fax varchar(128),
	phone varchar(20),
	home_phone varchar(20),
	comment text,
	active boolean default true,
	product_id integer,
	create_uid integer,
	create_date timestamp default current_timestamp on update current_timestamp,
	write_date timestamp default current_timestamp on update current_timestamp,
	write_uid integer,
	CONSTRAINT FK_partners_product FOREIGN KEY (product_id)
		REFERENCES tbl_products (id),
	CONSTRAINT FK_partners_create FOREIGN KEY (create_uid)
		REFERENCES tbl_users (id) MATCH SIMPLE ON UPDATE NO ACTION ON DELETE SET NULL,
	CONSTRAINT FK_partners_write FOREIGN KEY (write_uid)
		REFERENCES tbl_users (id) MATCH SIMPLE ON UPDATE NO ACTION ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO tbl_users (name, last_name, sex, identification, address, phone, home_phone, login, password, email) VALUES ('Jose','Martinez','Masculino','123456','Venezuela','12345678','12345678','admin','admin','webmaster@example.com');
