DROP DATABASE IF EXISTS dbemployes;

CREATE DATABASE dbemployes;

use  dbemployes;

CREATE TABLE Employes (
    ID_Employes INT(5) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    Prenom_Employes VARCHAR(250) not null,
    Date_naissance VARCHAR (250) not null,
    Fonction_Employes VARCHAR(100) not null,
	Email_Employes VARCHAR(300) not null,
   Salaire_Employes VARCHAR(200)
   )ENGINE=InnoDB;

   insert into Employes values
(0, 'Badji', '10 Octobre 2010','PDG','badji@dawm.as','75.000'),
(0, 'Toulepi', '10 Octobre 2010','DG','toulepi@dawm.as','65.000'),
(0, 'Aouakas', '10 Octobre 2010','RH','aouakas@dawm.as','60.000'),
(0, 'Souleymane', '10 Octobre 2010','DSI','souleymane@dawm.as','55.000'),
(0, 'Bakary', '10 Octobre 2010','RH','bakary@dawm.as','60.000')


