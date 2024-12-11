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
CREATE TABLE ville
(
  ville_id INT,
  nom VARCHAR(255),
  type VARCHAR(255),
  pays_id INT,
  PRIMARY KEY (ville_id),
  FOREIGN KEY(pays_id) REFERENCES pays(pays_id)
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