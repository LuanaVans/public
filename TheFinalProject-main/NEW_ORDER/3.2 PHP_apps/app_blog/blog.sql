CREATE DATABASE IF NOT EXISTS miblog;
USE miblog;

CREATE TABLE IF NOT EXISTS articulos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(255) NOT NULL
);

INSERT INTO articulos (titulo) VALUES
  ('Mi primer artículo'),
  ('Segundo post del blog'),
  ('Tercer artículo interesante'),
  ('Cuarto post'),
  ('Quinto artículo'),
  ('Sexto post del blog'),
  ('Séptimo artículo'),
  ('Octavo post'),
  ('Noveno artículo'),
  ('Décimo post');