

CREATE DATABASE Recolte;

use db_desp3_ETU002866;
CREATE TABLE admine 
(id_admin INT primary key auto_increment,
Email VARCHAR(50),
Motdepasse VARCHAR(40),
Nom VARCHAR(20),
DateNaissance DATE );

CREATE TABLE user 
(id_user INT primary key auto_increment,
Email VARCHAR(50),
Motdepasse VARCHAR(40),
Nom VARCHAR(20),
DateNaissance DATE );

Create table du_the
(id_variete_the INT primary key,
nom_variete_the VARCHAR(50),
occupation INT, rendement INT );

Create table cueilleurs
(id_cueilleurs INT primary key,
nom_ceuilleurs VARCHAR(50),
genre VARCHAR(20), 
DateNaissance date );

CREATE table categorie(
id_categorie INT primary key auto_increment,
nom VARCHAR(30)
);

Create table depense
(id_depense INT primary key auto_increment,
id_categorie INT,
montant DOUBLE, 
Date_dep date,
FOREIGN KEY(id_categorie) REFERENCES categorie (id_categorie) 
 );

Create table salaire
(id_cueilleurs INT,
montant DOUBLE 
);

CREATE TABLE parcelle 
(num_parcelle INT,
surface_ha INT,
id_variete_the INT, 
FOREIGN KEY(id_variete_the) REFERENCES du_the (id_variete_the) 
);

CREATE TABLE resulat 
(poid_total_ceuillette INT,
poid_restant INT,
cout_de_revien_kg DOUBLE
);



Insert into admine  VALUES ('1','Randrianante@gmail.com','FIDY','Nante Andria','2000-05-10' );
Insert into user  VALUES ('1','tikiz@gmail.com','tikiz','tikiz Randria','2003-06-12' );