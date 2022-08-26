#CREATE DATABASE IF NOT EXISTS MaisSaude;
USE u134325634_coelhobranco; 
#USE MaisSaude;



CREATE TABLE IF NOT EXISTS Sessions (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
UserID INT UNSIGNED DEFAULT 1,
PHPsession_id VARCHAR(255),
UserIP VARCHAR(255),
registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
lastchange_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS Userlevel (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS Users (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255),
username VARCHAR(255),
email VARCHAR(50),
userlevel_id INT UNSIGNED DEFAULT 1,
recoverycode VARCHAR(255),
password VARCHAR(255),
registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
lastchange_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS Partners (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255),
cpf VARCHAR(255),
adress VARCHAR(255), 
city VARCHAR(255),
cep VARCHAR(255),
number VARCHAR(255),
complement VARCHAR(255),
district VARCHAR(255),
state VARCHAR(255),
email VARCHAR(50),
phone VARCHAR(15),
phone2 VARCHAR(15),
UserID INT UNSIGNED,
id_area INT UNSIGNED,
presential TINYINT (1) DEFAULT 0,
c_virtual TINYINT (1) DEFAULT 0,
consultation_price_presential VARCHAR(10) DEFAULT 0,
consultation_price_online VARCHAR(10) DEFAULT 0, 
registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
lastchange_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS Expertise (
id_area INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
area VARCHAR(60),
registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
lastchange_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS Modality (
id_modality INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
modality VARCHAR(60),
registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
lastchange_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


INSERT IGNORE INTO Userlevel (id, name)
VALUES
(1, "admin");


INSERT IGNORE INTO Users (id, name, username, email, userlevel_id, password)
VALUES
(1, "Teste", "teste", "teste@localhost", 1, "$2y$10$7loYLdW44v0LBqngO8BreexhpIxNqHPlouvL92NIifWE1hYETUBbO");

INSERT IGNORE INTO Expertise (id_area, area)
VALUES
(1, 'Psicólgo(a)'),
(2, 'Fisioterapeuta');

INSERT IGNORE INTO Partners 
(name, cpf, adress, city, cep, number,
 complement, district, state, email, phone, phone2, userID, id_area, consultation_price_presential,  consultation_price_online)
VALUES
("teste", "00000000000", "rua teste","rio de janeiro", "00000000", "00", 
"", "centro", "rio de janeiro", "teste@localhost", "21999999999", "21999999999", 1, 1, "40", "40");

