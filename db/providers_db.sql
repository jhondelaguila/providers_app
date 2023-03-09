DROP DATABASE providers_db;
use providers_db;
select * from article;
/*insert into provider (name,email,phone,type,active,date_created,last_update)
values ('Prooveedor 1','provider1@prov.es','616697045','Hotel',true,'Hoy','Hoy');*/
/*CREATE TABLE provider(
	id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) UNIQUE,
	email VARCHAR(100) UNIQUE,
	phone VARCHAR(10),
	type ENUM('Hotel','Pista','Complemento'),
	active BOOLEAN DEFAULT FALSE,
	date_created DATETIME,
	last_update DATETIME
);*/