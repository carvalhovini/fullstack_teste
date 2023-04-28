CREATE DATABASE banco_do_site;

use banco_do_site;

CREATE TABLE Tabela_do_site (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  prof VARCHAR(30) NOT NULL,
  materia VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  rating INT(2) NOT NULL,
  comment TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO Tabela_do_site (name, prof, materia, email, rating, comment) VALUES
('João', 'Matemática', 'Cálculo', 'joao@email.com', 5, 'Excelente professor!'),
('Maria', 'Física', 'Mecânica', 'maria@email.com', 4, 'Bom professor.');