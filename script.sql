CREATE DATABASE
-- Table Utilisateur avec moteur InnoDB
CREATE TABLE Utilisateur (
    id INT PRIMARY KEY,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    username VARCHAR(50),
    password VARCHAR(50),
    email VARCHAR(100)
) ENGINE=InnoDB;

-- Table Article avec moteur InnoDB
CREATE TABLE Article (
    id INT PRIMARY KEY,
    titre VARCHAR(100),
    contenu TEXT,
    date_de_creation DATE,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES Utilisateur(id)
) ENGINE=InnoDB;

-- Table Administrateur avec moteur InnoDB
CREATE TABLE Administrateur (
    id INT PRIMARY KEY,
    phone VARCHAR(20),
    CIN VARCHAR(20),
    FOREIGN KEY (id) REFERENCES Utilisateur(id)
) ENGINE=InnoDB;