use db_desp3_ETU002866;
CREATE TABLE admin 
(id_admin INT primary key auto_increment,
Email VARCHAR(50),
Motdepasse VARCHAR(40),
Nom VARCHAR(20),
DateNaissance DATE );

CREATE TABLE user 
(id_admin INT primary key auto_increment,
Email VARCHAR(50),
Motdepasse VARCHAR(40),
Nom VARCHAR(20),
DateNaissance DATE );

Create table du_the
(id_variete_the INT primary key,
nom_variete_the VARCHAR(50),
occupation INT, rendement INT );

CREATE TABLE partielle 
(num_partielle INT,
surface_ha INT,
id_variete_the INT, 
FOREIGN KEY(id_variete_the) REFERENCES du_the (id_variete_the) 
);

Insert into admin  VALUES ('1','Randrianante@gmail.com',('FIDY'),'Nante Andria','2000-05-10' );
Insert into user  VALUES ('1','tikiz@gmail.com',('tikiz'),'tikiz Randria','2003-06-12' );