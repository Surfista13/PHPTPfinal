/*Creation de la table Restaurant*/
create database Restaurant;

/*Création des tables */
use Restaurant;
create table restaurants (
    idRestaurant integer not null primary key auto_increment,
    nom varchar(50) not null ,
    adresse varchar(200),
    cp numeric(5),
    ville varchar(50) not null ,
    telephone numeric(10),
    description varchar(2200)
);
use Restaurant;
create table avis (
    idRestaurant integer not null,
    idAvis integer not null,
    auteur varchar(50),
    note varchar(1000),
    commentaire varchar(2200),
    PRIMARY KEY (idRestaurant,idAvis)
);

/*Création foreign key*/
use Restaurant;
alter table avis
add CONSTRAINT FK_idRestaurant_Restaurants_idRestaurant
FOREIGN KEY (idRestaurant)  REFERENCES restaurants(idRestaurant);