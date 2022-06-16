CREATE DATABASE IF NOT EXISTS flevonautica;
USE flevonautica;

CREATE TABLE IF NOT EXISTS boattype
(
    type VARCHAR(100) PRIMARY KEY UNIQUE
);

CREATE TABLE IF NOT EXISTS models
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE,
    description TEXT,
    image VARCHAR(255) NOT NULL DEFAULT 'public/images/boats/default.jpg',
    CONSTRAINT type FOREIGN KEY(boattype) REFERENCES boattype(type) NOT NULL,
    lgth DECIMAL(10, 2) NOT NULL,
    width DECIMAL(10, 2) NOT NULL,
    weight DECIMAL(10, 2) NOT NULL,
    draft DECIMAL(5, 2) NOT NULL,
    maxpk INT(5) NOT NULL,
    maxpers INT(4) NOT NULL,
    cec VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS users
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
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

create table IF NOT EXISTS images
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    modelid INT NOT NULL,
    image VARCHAR(255) NOT NULL,
    FOREIGN KEY(modelid) REFERENCES models(id) NOT NULL
);

-- Create admin user. MAKE SURE TO CHANGE THIS TO SOMETHING SECURE
INSERT INTO users (username, password)
VALUES ('admin', 'password123');
