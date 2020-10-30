create table persoonlijkegegevens (id int primary key auto_increment, naam varchar(50), email varchar(50), tel varchar(50), adres varchar(60));
insert into persoonlijkegegevens values(1,'Tristan','dummy@hotmail.com','0629485326','Postelweg 100');


create table contact(id int primary key auto_increment, bedrijf varchar(50), email varchar(50), tel varchar(50), opmerking varchar(100));
insert into contact values(1,'Janssen.bv', 'janssen@hotmail.com', '0629481512', 'Ik wil jou aannemen voor deze functie');

create table informatie(id int primary key auto_increment, informatie TEXT);
insert into informatie values(1,'Dit is dummy tekst alleen als voorbeeld');

create table kwalificaties(id int primary key auto_increment, taal1 varchar(50), taal2 varchar(50), taal3 varchar(50), taal4 varchar(50));
insert into kwalificaties values(1,'HTML', 'REACT', 'CSS', 'Javascript');

create table pafbeelding(id int primary key auto_increment, afbeelding varchar(30));
insert into pafbeelding values(1,'tristan.jpg');

create table projecten(id int primary key auto_increment, projectlink1 varchar(40), projectlink2 varchar(40), projectlink3 varchar(40), projectafbeelding1 varchar(40), projectafbeelding2 varchar(40), projectafbeelding3 varchar(40));
insert into projecten values(1,'https://google.com','https://google.com','https://google.com', 'bpAfbeelding1.jpg', 'bpAfbeelding2.jpg', 'bpAfbeelding3.jpg');

create table visie (id int primary key auto_increment, visie varchar(200));
insert into visie values(1,'Dit is dummy tekst');



