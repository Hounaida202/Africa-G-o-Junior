CREATE TABLE continent
(
  continent_id INT,
  nom VARCHAR(255),
  PRIMARY KEY(continent_id)
);

CREATE TABLE pays
(
  pays_id INT,
  nom VARCHAR(255),
  langue VARCHAR(255),
  population INT,
  continent_id INT,
  PRIMARY KEY (pays_id),
  FOREIGN KEY(continent_id) REFERENCES continent(continent_id)
  
);