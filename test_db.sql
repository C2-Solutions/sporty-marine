CREATE DATABASE IF NOT EXISTS flevonautica;
USE flevonautica;

CREATE TABLE IF NOT EXISTS models
(
    id      int auto_increment primary key,
    name    varchar(100) not null,
    price   int(9) not null,
    length  decimal(5,2) not null,
    width   decimal(5,2) not null,
    weight  int(5) not null,
    airdraft int(5) not null,
    draft   int(5) not null,
    maxpk   int(4) not null,
    maxpers int(3) not null,
    builtin int(4) not null,
    cec     varchar(2),
    status    varchar(10) not null,
    availability    boolean not null,
    description     text
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

CREATE TABLE IF NOT EXISTS images
(
    id      int auto_increment primary key,
    modelid int not null ,
    image   varchar(255) not null ,
    FOREIGN KEY (modelid) REFERENCES models(id)
    );

-- Create temporary admin users
INSERT INTO admins (username, password)
VALUES ('admin', 'password123')

