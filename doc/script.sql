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
FOREIGN KEY (idRestaurant)  REFERENCES restaurants(idRestaurant) ON DELETE CASCADE;

/*Insertion restaurant*/
insert into restaurants (nom, adresse, cp, ville, telephone, description)
values ('Buffalo Grill','10 rue des paix','44500','Sautron','0140587851','Un restuarant de viande pour tous.');
insert into restaurants (nom, adresse, cp, ville, telephone, description)
values ('Buffalo Grill2','10 rue des paix','44500','Sautron','0140587851','Un restuarant de viande pour tous.');

/*Insertion avis*/
insert into avis (idRestaurant, idAvis, auteur, note, commentaire)
values ('1','1','Bruno','10','génial le restaurant');
insert into avis (idRestaurant, idAvis, auteur, note, commentaire)
values ('1','2','Pierre','5','moyen le restaurant');
insert into avis (idRestaurant, idAvis, auteur, note, commentaire)
values ('2','1','Léon','8','moyen le restaurant');
insert into avis (idRestaurant, idAvis, auteur, note, commentaire)
values ('2','2','Nicolas','2','nul le restaurant');
