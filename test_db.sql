create database flevonautica;

show databases;

use flevonautica;

create table models
(
    id      int auto_increment primary key,
    name    varchar(100) not null,
    price   int(9) cast(12345.678 as money) not null,
    image   varchar(255),
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
    availability    boolean
);

create table admins
(
    id      int auto_increment primary key,
    username varchar(255) not null,
    password text not null
);

create table contact
(
    id      int auto_increment primary key,
    name    varchar(40) not null,
    email  varchar(100) not null,
    phone   varchar(100) null,
    message text not null,
    date date
);