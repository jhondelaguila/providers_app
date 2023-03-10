DROP DATABASE providers_db;
use providers_db;
select * from provider;
/*insert into provider (name,email,phone,type,active,date_created,last_update)
values ('Prooveedor 1','provider1@prov.es','616697045','Hotel',true,'Hoy','Hoy');*/
/*CREATE TABLE provider(
	id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL UNIQUE,
	email VARCHAR(100) NOT NULL UNIQUE,
	phone VARCHAR(10) NOT NULL UNIQUE,
	type ENUM('Hotel','Pista','Complemento'),
	active NOT NULL BOOLEAN DEFAULT FALSE,
	date_created DATETIME NOT NULL,
	last_update DATETIME
);*/