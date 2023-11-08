-- SQLBook: Code
-- Active: 1675357558927@@127.0.0.1@3306@db_demo
CREATE TABLE user(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    firstname VARCHAR(40) NOT NULL,
    lastname VARCHAR(40) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    birthday DATE NOT NULL
) COMMENT '';

ALTER TABLE `user`
  ADD UNIQUE KEY `user_email` (`email`);