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
  FOREIGN KEY(continent_id) REFERENCES continent(continent_id) ON DELETE CASCADE
  
);
CREATE TABLE ville
(
  ville_id INT,
  nom VARCHAR(255),
  type VARCHAR(255),
  pays_id INT,
  PRIMARY KEY (ville_id),
  FOREIGN KEY(pays_id) REFERENCES pays(pays_id) ON DELETE CASCADE
);

INSERT INTO continent (`continent_id`, `nom`) VALUES
(1, 'Africa');

INSERT INTO pays (`pays_id`, `nom`, `langue`, `population`, `continent_id`) 
VALUES
(1, 'Maroc', 'Arabe', 37460000, 1),
(2, 'Afrique Du sud', 'Anglais', 59890000, 1),
(3, 'Egypte', 'Arabe', 100990000, 1),
(4, 'Sénégale', 'Français', 17320000, 1),
(5, 'Kenya', 'Anglais', 54030000, 1),
(6, 'Madagascar', 'Français', 29610000, 1),
(7, 'Sudan', 'Arabe', 46870000, 1),
(8, 'Nigeria', 'Anglais', 218540000, 1),
(9, 'Ethiopia', 'Amharique', 126500000, 1),
(10, 'Sudan', 'Arabe', 46870000, 1),
(11, 'Ghana', 'Anglais', 32940000, 1), 
(12, 'Tanzania', 'Swahili', 65890000, 1), 
(13, 'Somalia', 'Somali', 18000000, 1),
(14, 'Angola', 'Portugais', 36550000, 1),
(15, 'Cameroon', 'Français', 28000000, 1),
(16, 'Ivory Coast', 'Français', 27770000, 1),
(17, 'Uganda', 'Anglais', 47790000, 1),
(18, 'Zimbabwe', 'Anglais', 16500000, 1),
(19, 'Libya', 'Arabe', 6900000, 1),
(20, 'Chad', 'Arabe', 18300000, 1)
;

INSERT INTO ville (`ville_id`, `nom`, `type`, `pays_id`) VALUES
(1, 'Rabat', 'Capitale', 1),
(2, 'Pretoria', 'Capitale', 2),
(3, 'Cairo', 'Capitale', 3),
(4, 'Dakar', 'Capitale', 4),
(5, 'Antananarivo', 'Capitale', 5),
(6, 'Nairobi', 'Capitale', 6),
(7, 'Abuja', 'Capitale', 7),
(8, 'Khortoum', 'Capitale', 8),
(9, 'Abuja', 'Capitale', 9),
(10, 'Abuja', 'Capitale', 10),
(11, 'Accra', 'Capitale', 11),
(12, 'Dodoma', 'Capitale', 12),
(13, 'Mogadiscio', 'Capitale', 13),
(14, 'Luanda', 'Capitale', 14),
(15, 'Yaoundé', 'Capitale', 15),
(16, 'Yamoussoukro', 'Capitale', 16),
(17, 'Kampala', 'Capitale', 17),
(18, 'Harare', 'Capitale', 18),
(19, 'Tripoli', 'Capitale', 19),
(20, 'Djamena', 'Capitale', 20)
;

-- update
UPDATE ville
SET nom = 'nottripoli'
WHERE ville_id=19;

UPDATE pays
SET population=40000000
WHERE pays_id=1;
-- la supprission d'un pays et d'une ville
DELETE FROM pays
WHERE pays_id = 20;

DELETE FROM ville
WHERE pays_id = 20;

-- l'affichage

SELECT 
 pays.nom AS pays, 
 pays.langue AS langue, 
 pays.population AS population, 
  continent.nom AS continent
FROM pays
INNER JOIN continent ON pays.continent_id = continent.continent_id
WHERE continent.nom = 'Africa';

