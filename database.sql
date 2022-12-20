CREATE DATABASE ProyectoTokioSchool;
CREATE TABLE users (
    id  INT unsigned NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
    last_name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password TEXT,
    PRIMARY KEY (id)
);