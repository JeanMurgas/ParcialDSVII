-- Active: 1699242653068@@127.0.0.1@33532@bdds7
CREATE DATABASE bdds7
    DEFAULT CHARACTER SET = 'utf8mb4';

    USE bdds7;
   
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role ENUM('cliente', 'tecnico') NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,  -- Esta columna almacenará las contraseñas cifradas
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES roles(id)
);

CREATE TABLE tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('abierto', 'en proceso', 'cerrado') NOT NULL,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);




drop DATABASE bdds7;
