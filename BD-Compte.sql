create database Compte;
use Compte;

create table Utilisateur
(
    Nom varchar(300),
    Login varchar(300) primary key,
    Psw varchar(300),
    Tel varchar(20),
    Statut varchar(20),
    Verification varchar(300),
    answer varchar(300),
    Rolee varchar(20),
    datee date
);

create table Moderateur
(
    IdMod varchar(20),
    Login varchar(300),
    Psw varchar(300) 
);
alter table Moderateur add constraint pk primary key(IdMod,Login);
alter table Moderateur add foreign key (login) references Utilisateur(login);
insert into Utilisateur values('$nom','$email','$psw','','active','','','Utilisateur','GETDATE()'

drop table Moderateur;
drop table Utilisateur;


_____________________________________
create database Compte1;
use Compte1;
create table User
(
    Login varchar(300) primary key,
    Psw varchar(300) 
);



