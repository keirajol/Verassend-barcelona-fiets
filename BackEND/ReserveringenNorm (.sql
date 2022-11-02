CREATE TABLE ReserveringenNorm (
	id int(20) not null PRIMARY KEY AUTO_INCREMENT,
    Voornaam varchar(16) not null,
    Achternaam varchar(33) not null,
    fietsen int(20),
    datum int(22),
);