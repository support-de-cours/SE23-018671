-- SQLBook: Code
-- Active: 1675357558927@@127.0.0.1@3306@db_demo
CREATE TABLE books (  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    create_time DATETIME COMMENT 'Create Time',
    title VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2)
) COMMENT '';