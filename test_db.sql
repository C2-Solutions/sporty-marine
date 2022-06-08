CREATE DATABASE IF NOT EXISTS flevonautica;
USE flevonautica;

CREATE TABLE IF NOT EXISTS models
(
    id INT auto_increment PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    image VARCHAR(255),
    length DECIMAL(10,2) NOT NULL,
    width DECIMAL(10,2) NOT NULL,
    weight DECIMAL(10,2) NOT NULL,
    airdraft DECIMAL(5,2) NOT NULL,
    draft DECIMAL(5,2) NOT NULL,
    maxpk INT(5) NOT NULL,
    maxpers INT(4) NOT NULL,
    cec VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS admins
(
    id INT auto_increment PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS contact
(
    id INT auto_increment PRIMARY KEY,
    name VARCHAR(40) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(100) null,
    message TEXT NOT NULL,
    date DATE
);

-- Create temporary admin users
INSERT INTO admins (username, password)
VALUES ('admin', 'password123')
