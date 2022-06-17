CREATE DATABASE IF NOT EXISTS FLEVONAUTICA;
USE flevonautica;

CREATE TABLE IF NOT EXISTS boattype
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    type VARCHAR(100) UNIQUE
);

CREATE TABLE IF NOT EXISTS models
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    boattype INT NOT NULL,
    name VARCHAR(100) NOT NULL UNIQUE,
    price INT(9) NOT NULL,
    description TEXT,
    image VARCHAR(255) NOT NULL DEFAULT 'public/images/boats/default.jpg',
    lgth DECIMAL(10, 2) NOT NULL,
    width DECIMAL(10, 2) NOT NULL,
    weight DECIMAL(10, 2) NOT NULL,
    airdraft INT(5) NOT NULL,
    draft DECIMAL(5, 2) NOT NULL,
    maxpk INT(5) NOT NULL,
    maxpers INT(4) NOT NULL,
    builtin INT(4) NOT NULL,
    cec VARCHAR(20),
    status VARCHAR(10) NOT NULL,
    availability BOOLEAN NOT NULL,
    CONSTRAINT `boattypes` FOREIGN KEY(boattype) REFERENCES boattype(id)
);

CREATE TABLE IF NOT EXISTS users
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    last_changed DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS contact_inquiries
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(100) NULL,
    message TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (username, password)
VALUES ('admin', 'password123');

INSERT INTO flevonautica.boattype (type) VALUES ('Speedboat');
INSERT INTO flevonautica.boattype (type) VALUES ('Flexboat');
INSERT INTO flevonautica.boattype (type) VALUES ('Sailboat');

INSERT INTO flevonautica.models (id, boattype, name, price, description, image, lgth, width, weight, airdraft, draft, maxpk, maxpers, builtin, cec, status, availability) VALUES (1, 1, 'Sporty 15', 15000, 'Dit is een van onze topboten!

              Kwaliteit en klasse krijg je zelden voor deze goedkope prijs!', 'testboot.jpg', 15.00, 3.00, 300.00, 50, 20.00, 50, 5, 2022, 'A', 'Nieuw', 1)

INSERT INTO flevonautica.contact_inquiries (name, email, phone, message, created_at) VALUES ('Jan Jansen', 'Jan.Jansen@gmail.com', '068881459', 'Ik wil graag een boot bekijken? Kan dat? Mail me terug a.u.b.', DEFAULT)

INSERT INTO flevonautica.contact_inquiries (name, email, phone, message, created_at) VALUES ('Piet Pieterszoon', 'PP36@hotmail.be', '061515134', 'Erg geïnteresseerd! Je kan me bellen!', DEFAULT)
