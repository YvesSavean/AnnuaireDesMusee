Create database db_annu;

CREATE TABLE musee (
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(40) NOT NULL,
    ville VARCHAR(40),
    pays VARCHAR(40),
	nbVisiteur BIGINT,
	description VARCHAR(200),
    PRIMARY KEY (id)
);

CREATE TABLE catalogue(
	id INT NOT NULL AUTO_INCREMENT,
	libelle VARCHAR(40) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE possede(
	Id_Fiche int NOT NULL,
	Id_Catalogue int NOT NULL,
	PRIMARY KEY(Id_Fiche,Id_Catalogue),
	FOREIGN KEY (Id_Fiche) REFERENCES musee(Id),
	FOREIGN KEY (Id_Catalogue) REFERENCES catalogue(Id)
);

ALTER TABLE  `musee` ADD UNIQUE (
`nom`
);

insert into musee(nom,ville,pays,nbVisiteur) values('Musée du Louvre','Paris','France',8500000);
insert into musee(nom,ville,pays,nbVisiteur) values('British Museum','Londres','Royaume-Uni',5842138);
insert into musee(nom,ville,pays,nbVisiteur) values('Metropolitan Museum of Art','New York','États-Unis',5216988);

insert into catalogue(libelle) values('catalogue1');
insert into catalogue(libelle) values('catalogue2');

insert into possede values(1,1);
insert into possede values(2,1);
insert into possede values(3,1);

insert into possede values(2,2);
insert into possede values(3,2);
insert into possede values(4,2);