
CREATE DATABASE usuarios;

CREATE TABLE users (
                          id INT NOT NULL AUTO_INCREMENT,
                          username VARCHAR(50) NOT NULL,
                          password VARCHAR(50) NOT NULL,
                          PRIMARY KEY (id)
);

INSERT INTO users (username, password) VALUES ('Ana', '123456');
INSERT INTO users (username, password) VALUES ('Marta', '123456');
INSERT INTO users (username, password) VALUES ('Jose', '123456');
INSERT INTO users (username, password) VALUES ('Sergio', '123456');

CREATE USER 'usurarios'@'localhost' IDENTIFIED BY 'usurarios';

GRANT ALL PRIVILEGES ON usuarios.* TO 'usurarios'@'localhost';

CREATE TABLE tareas (
                        id INT PRIMARY KEY AUTO_INCREMENT,
                        descripcion VARCHAR(255) NOT NULL
);