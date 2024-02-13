


use db_desp3_ETU002820;
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
genre V
ARCHAR(20), 
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
(
id_salaire INT PRIMARY KEY auto_increment,
id_cueilleurs INT,
montant DOUBLE 
);

CREATE TABLE parcelle 
(
id_parcelle INT PRIMARY KEY auto_increment,
num_parcelle INT,
surface_ha INT,
id_variete_the INT, 
FOREIGN KEY(id_variete_the) REFERENCES du_the (id_variete_the) 
);

CREATE TABLE resultat 
( Id_resultat INT PRIMARY KEY auto_increment,
poid_total_ceuillette DOUBLE,
poid_restant_parcelle DOUBLE,
montant_ventes DOUBLE,
montant_depense DOUBLE,
benefice DOUBLE,
cout_de_revien_kg DOUBLE
);

CREATE TABLE histo_cuiellet 
(
id_histo INT PRIMARY KEY auto_increment,
id_cueilleurs INT,
num_parcelle INT,
poids_ceuillet DOUBLE,
date_debut DATE,
date_fin DATE,
FOREIGN KEY(id_cueilleurs) REFERENCES cueilleurs(id_cueilleurs)
);

CREATE TABLE regeneration(
    id INT PRIMARY KEY auto_increment,
    regeneration INT
);

CREATE TABLE mouvement
(id_mouve INT PRIMARY KEY auto_increment,
id_parcelle  INT,
poid_plein DOUBLE , 
poid_mouvement DOUBLE ,
FOREIGN KEY (id_parcelle)REFERENCES parcelle(id_parcelle));

Insert into admine  VALUES ('1','Randrianante@gmail.com','FIDY','Nante Andria','2000-05-10' );
Insert into user  VALUES ('1','tikiz@gmail.com','tikiz','tikiz Randria','2003-06-12' );

