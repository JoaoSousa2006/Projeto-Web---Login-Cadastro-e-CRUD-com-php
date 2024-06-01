DROP database cadlog;
-- Create the new database

CREATE DATABASE cadlog;

USE cadlog;

CREATE TABLE users
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY , -- primary key column
    comp_name VARCHAR (50) NOT NULL,
    user_name VARCHAR (50) NOT NULL,
    pass_word VARCHAR (50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `comp_name`, `user_name`, `pass_word`) VALUES
(5, 'Katyene Kelwyny Alves Maroto da Silva', 'Marotinho_Silva', 'Kat');
