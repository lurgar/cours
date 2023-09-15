--1-- lister toutes les BDD de PHPMyAdmin
SHOW DATABASES;
+--------------------+
| Database           |
+--------------------+
| bibliotheque       |
| entreprise         |
| hotel              |
| information_schema |
| mysql              |
| performance_schema |
| phpmyadmin         |
| wordpress          |
+--------------------+

--2-- Créer une base de données SQL nommée HARIBO
CREATE DATABASE haribo;

--3/4/5--
/* TABLE STAGIAIRES */
CREATE TABLE stagiaires(id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL, prenom varchar(100) NOT NULL, yeux varchar(30) NOT NULL, genre enum('m', 'f') NOT NULL);

/* TABLE BONBONS */
CREATE TABLE bonbons(id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL, nom varchar(100) NOT NULL, saveur varchar(100) NOT NULL);

/* TABLE BONBON MANGES PAR LES STAGIAIRES */
CREATE TABLE candisplay(id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL, id_bonbon INT(11) DEFAULT NULL, id_stagiaire INT(11) DEFAULT NULL, date_manger DATE NOT NULL, quantite INT(11) NOT NULL);

--6/7--
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('jhordan', 'marron','m');
Query OK, 1 row affected, 1 warning (0.01 sec)
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('MohamedA', 'marron','m');
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('Anas', 'marron','m');
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('MohamedB', 'marron','m');
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('Mehdi', 'marron','m');
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('Mathieu', 'marron','m');
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('Hakim', 'marron','m');
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('Sonia', 'marron','f');
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('Julie', 'marron','f');
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('Assa', 'marron','f');
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('Magalie', 'marron','f');
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('Yvette', 'marron','f');

--8--
INSERT INTO bonbons (nom, saveur) VALUES ('dragibus', 'cola');
INSERT INTO bonbons (nom, saveur) VALUES ('tagada', 'fraise');
INSERT INTO bonbons (nom, saveur) VALUES ('bams', 'banane');
INSERT INTO bonbons (nom, saveur) VALUES ('rotella', 'reglisse');
INSERT INTO bonbons (nom, saveur) VALUES ('floppys', 'sucre');
INSERT INTO bonbons (nom, saveur) VALUES ('rainbollows', 'marshmallow');
INSERT INTO bonbons (nom, saveur) VALUES ('bigharri', 'cerise');
INSERT INTO bonbons (nom, saveur) VALUES ('oursor', 'fruits');
INSERT INTO bonbons (nom, saveur) VALUES ('croco', 'fruits');
INSERT INTO bonbons (nom, saveur) VALUES ('oeufoplat', 'guimauve');
INSERT INTO bonbons (nom, saveur) VALUES ('flanbotti', 'caramel');


INSERT INTO candisplay (id_bonbon, id_stagiaire, date_manger, quantite) VALUES (4,7,'2018-12-20', 5);
INSERT INTO candisplay (id_bonbon, id_stagiaire, date_manger, quantite) VALUES (1,1,'2018-12-05', 5);
INSERT INTO candisplay (id_bonbon, id_stagiaire, date_manger, quantite) VALUES (2,2,'2018-12-03', 5);
INSERT INTO candisplay (id_bonbon, id_stagiaire, date_manger, quantite) VALUES (3,3,'2018-12-04', 5);
INSERT INTO candisplay (id_bonbon, id_stagiaire, date_manger, quantite) VALUES (5,4,'2018-12-15', 5);
INSERT INTO candisplay (id_bonbon, id_stagiaire, date_manger, quantite) VALUES (6,5,'2018-12-18', 5);
INSERT INTO candisplay (id_bonbon, id_stagiaire, date_manger, quantite) VALUES (7,6,'2018-12-22', 5);
INSERT INTO candisplay (id_bonbon, id_stagiaire, date_manger, quantite) VALUES (8,8,'2018-12-25', 5);
INSERT INTO candisplay (id_bonbon, id_stagiaire, date_manger, quantite) VALUES (9,9,'2018-12-24', 5);
INSERT INTO candisplay (id_bonbon, id_stagiaire, date_manger, quantite) VALUES (10,10,'2018-12-01', 5);
INSERT INTO candisplay (id_bonbon, id_stagiaire, date_manger, quantite) VALUES (11,11,'2018-12-06', 5);

--9-- Lister les tables de la BDD *haribo*
+------------------+
| Tables_in_haribo |
+------------------+
| bonbons          |
| candisplay       |
| stagiaires       |
+------------------+

--10-- voir les paramètres de la table *bonbon*
DESCRIBE bonbons;
+--------+--------------+------+-----+---------+----------------+
| Field  | Type         | Null | Key | Default | Extra          |
+--------+--------------+------+-----+---------+----------------+
| id     | int(11)      | NO   | PRI | NULL    | auto_increment |
| nom    | varchar(100) | NO   |     | NULL    |                |
| saveur | varchar(100) | NO   |     | NULL    |                |
+--------+--------------+------+-----+---------+----------------+

--11-- Sélectionner tous les champs de tous les enregistrements de la table *stagiaire*
SELECT * FROM stagiaires;
+----+----------+--------+-------+
| id | prenom   | yeux   | genre |
+----+----------+--------+-------+
|  1 | jhordan  | marron | m     |
|  2 | MohamedA | marron | m     |
|  3 | Anas     | marron | m     |
|  4 | MohamedB | marron | m     |
|  5 | Mehdi    | marron | m     |
|  6 | Mathieu  | marron | m     |
|  7 | Hakim    | marron | m     |
|  8 | Sonia    | marron | f     |
|  9 | Julie    |  vert  | f     |
| 10 | Assa     | marron | f     |
| 11 | Magalie  | marron | f     |
| 12 | Yvette   | marron | f     |
+----+----------+--------+-------+

--12-- Rajouter un nouveau stagiaire *Patriiiick* en forçant la numérotation de l'id
INSERT INTO stagiaires (id, prenom, yeux, genre) VALUES ('35', 'Patriiiick', 'marron','m');Query OK, 1 row affected (0.01 sec)

--13-- Rajouter un nouveau stagiaire *Mila* SANS forcer la numérotation de l'id
INSERT INTO stagiaires VALUES ('', 'Mila', 'bleu', 'f');
Query OK, 1 row affected, 1 warning (0.01 sec)

--14-- Changer le prénom du stagiaire qui a l'id 100(35) de *Patriiiick* à *Patrick*
UPDATE stagiaires
SET prenom = 'Patrick'
WHERE prenom="Patriiiick";
Query OK, 1 row affected (0.01 sec)
Rows matched: 1  Changed: 1  Warnings: 0
--ou avec l'ID 35

--15-- Rajouter dans la table manger que Patrick a mangé 5 Tagada purple le 15 septembre
INSERT INTO bonbons (nom, saveur) VALUES ('tagada', 'purple');

INSERT INTO candisplay VALUES ('', 12,35,'2018-09-15', 5);

--16-- Sélectionner tous les noms des bonbons
SELECT nom FROM bonbons;
+-------------+
| nom         |
+-------------+
| dragibus    |
| tagada      |
| bams        |
| rotella     |
| floppys     |
| rainbollows |
| bigharri    |
| oursor      |
| croco       |
| oeufoplat   |
| flanbotti   |
| tagada      |
+-------------+

--17-- Sélectionner tous les noms des bonbons en enlevant les doublons
SELECT DISTINCT nom FROM bonbons;
+-------------+
| nom         |
+-------------+
| dragibus    |
| tagada      |
| bams        |
| rotella     |
| floppys     |
| rainbollows |
| bigharri    |
| oursor      |
| croco       |
| oeufoplat   |
| flanbotti   |
+-------------+

--18-- Récupérer les couleurs des yeux des stagiaires (Sélectionner plusieurs champs dans une table)
SELECT prenom, yeux FROM stagiaires;
+----------+--------+
| prenom   | yeux   |
+----------+--------+
| jhordan  | marron |
| MohamedA | marron |
| Anas     | marron |
| MohamedB | marron |
| Mehdi    | marron |
| Mathieu  | marron |
| Hakim    | marron |
| Sonia    | marron |
| Julie    | vert   |
| Assa     | marron |
| Magalie  | marron |
| Yvette   | marron |
| Patrick  | marron |
| Mila     | bleu   |
+----------+--------+

--19-- Dédoublonner un résultat sur plusieurs champs
SELECT prenom, yeux FROM stagiaires GROUP BY yeux;
+---------+--------+
| prenom  | yeux   |
+---------+--------+
| Mila    | bleu   |
| jhordan | marron |
| Julie   | vert   |
+---------+--------+

--20-- Sélectionner le stagiaire qui a l'id 5
SELECT prenom FROM stagiaires WHERE id="5";
+--------+
| prenom |
+--------+
| Mehdi  |
+--------+

--21-- Sélectionner tous les stagiaires qui ont les yeux marrons
SELECT prenom FROM stagiaires WHERE yeux="marron";
+----------+
| prenom   |
+----------+
| jhordan  |
| MohamedA |
| Anas     |
| MohamedB |
| Mehdi    |
| Mathieu  |
| Hakim    |
| Sonia    |
| Assa     |
| Magalie  |
| Yvette   |
| Patrick  |
+----------+

--22-- Sélectionner tous les stagiaires dont l'id est plus grand que 9
SELECT prenom FROM stagiaires WHERE id>9;
+---------+
| prenom  |
+---------+
| Assa    |
| Magalie |
| Yvette  |
| Patrick |
| Mila    |
+---------+

--23-- Sélectionner tous les stagiaires SAUF celui dont l'id est 13 (soyons supersticieux !) :!\ il y a 2 façons de faire
SELECT prenom FROM stagiaires WHERE id!=13;
+----------+
| prenom   |
+----------+
| jhordan  |
| MohamedA |
| Anas     |
| MohamedB |
| Mehdi    |
| Mathieu  |
| Hakim    |
| Sonia    |
| Julie    |
| Assa     |
| Magalie  |
| Yvette   |
| Patrick  |
| Mila     |
+----------+

--24-- Sélectionner tous les stagiaires qui ont un id inférieur ou égal à 10
SELECT prenom FROM stagiaires WHERE id<=10;
+----------+
| prenom   |
+----------+
| jhordan  |
| MohamedA |
| Anas     |
| MohamedB |
| Mehdi    |
| Mathieu  |
| Hakim    |
| Sonia    |
| Julie    |
| Assa     |
+----------+

--25-- Sélectionner tous les stagiaires dont l'id est compris entre 7 et 11
SELECT prenom FROM stagiaires WHERE id<=11 AND id>=7;
+---------+
| prenom  |
+---------+
| Hakim   |
| Sonia   |
| Julie   |
| Assa    |
| Magalie |
+---------+

--26-- Sélectionner les stagiaires dont le prénom commence par un *S*
SELECT prenom FROM stagiaires WHERE prenom LIKE "S%";
+--------+
| prenom |
+--------+
| Sonia  |
+--------+

--27-- Trier les stagiaires femmes par id décroissant
SELECT prenom FROM stagiaires WHERE genre='f' ORDER BY id DESC;
+---------+
| prenom  |
+---------+
| Mila    |
| Yvette  |
| Magalie |
| Assa    |
| Julie   |
| Sonia   |
+---------+

--28-- Trier les stagiaires hommes par prénom dans l'ordre alphabétique
SELECT prenom FROM stagiaires WHERE genre='m' ORDER BY prenom ASC;
+----------+
| prenom   |
+----------+
| Anas     |
| Hakim    |
| jhordan  |
| Mathieu  |
| Mehdi    |
| MohamedA |
| MohamedB |
| Patrick  |
+----------+

--29-- Trier les stagiaires en affichant les femmes en premier et en classant les couleurs des yeux dans l'ordre alphabétique
SELECT prenom, yeux FROM stagiaires ORDER BY genre DESC, yeux ASC;
+----------+--------+
| prenom   | yeux   |
+----------+--------+
| Mila     | bleu   |
| Yvette   | marron |
| Magalie  | marron |
| Assa     | marron |
| Sonia    | marron |
| Julie    | vert   |
| Mathieu  | marron |
| Hakim    | marron |
| Mehdi    | marron |
| MohamedB | marron |
| Anas     | marron |
| MohamedA | marron |
| Patrick  | marron |
| jhordan  | marron |
+----------+--------+

--30-- Limiter l'affichage d'une requête de sélection de tous les stagiaires aux 3 premires résultats
SELECT * FROM stagiaires LIMIT 0,3;
+----+----------+--------+-------+
| id | prenom   | yeux   | genre |
+----+----------+--------+-------+
|  1 | jhordan  | marron | m     |
|  2 | MohamedA | marron | m     |
|  3 | Anas     | marron | m     |
+----+----------+--------+-------+

--31-- Limiter l'affichage d'une requête de sélection de tous les stagiaires à partir du 3ème résultat et des 5 suivants
SELECT * FROM stagiaires LIMIT 3,5;
+----+----------+--------+-------+
| id | prenom   | yeux   | genre |
+----+----------+--------+-------+
|  4 | MohamedB | marron | m     |
|  5 | Mehdi    | marron | m     |
|  6 | Mathieu  | marron | m     |
|  7 | Hakim    | marron | m     |
|  8 | Sonia    | marron | f     |
+----+----------+--------+-------+

--32-- Afficher les 4 premiers stagiaires qui ont les yeux marron
SELECT prenom FROM stagiaires WHERE yeux="marron" LIMIT 0,4;
+----------+
| prenom   |
+----------+
| jhordan  |
| MohamedA |
| Anas     |
| MohamedB |
+----------+

--33-- Pareil mais en triant les prénoms dans l'ordre alphabétique
SELECT prenom FROM stagiaires WHERE yeux="marron" ORDER BY prenom ASC LIMIT 0,4;
+---------+
| prenom  |
+---------+
| Anas    |
| Assa    |
| Hakim   |
| jhordan |
+---------+

--34-- Compter le nombre de stagiaires
SELECT COUNT(id) AS nombre_de_stagiaires FROM stagiaires;
+----------------------+
| nombre_de_stagiaires |
+----------------------+
|                   14 |
+----------------------+

--35-- Compter le nombre de stagiaires hommes mais en changeant le nom de la colonne de résultat par *nb_stagiaires_H*
SELECT COUNT(id) AS nombre_de_stagiaires_H FROM stagiaires WHERE genre='m';
+------------------------+
| nombre_de_stagiaires_H |
+------------------------+
|                      8 |
+------------------------+

--36-- Compter le nombre de couleurs d'yeux différentes
SELECT COUNT(DISTINCT yeux) AS couleur_yeux_diff FROM stagiaires;
+-------------------+
| couleur_yeux_diff |
+-------------------+
|                 3 |
+-------------------+

--37-- Afficher le prénom et les yeux du stagiaire qui a l'id le plus petit
SELECT MIN(id),prenom, yeux FROM stagiaires;
+---------+---------+--------+
| MIN(id) | prenom  | yeux   |
+---------+---------+--------+
|       1 | jhordan | marron |
+---------+---------+--------+

--38-- Afficher le prénom et les yeux du stagiaire qui a l'id le plus grand /!\ c'est une requête imbriquée qu'il faut faire (requête sur le résultat d'une autre requête)
SELECT MAX(id), prenom, yeux FROM stagiaires;
+---------+---------+--------+
| MAX(id) | prenom  | yeux   |
+---------+---------+--------+
|      36 | jhordan | marron |
+---------+---------+--------+

--39-- Afficher les stagiaires qui ont les yeux bleu et vert
SELECT prenom, yeux FROM stagiaires WHERE yeux LIKE "bleu" <> yeux LIKE "vert";
+--------+------+
| prenom | yeux |
+--------+------+
| Julie  | vert |
| Mila   | bleu |
+--------+------+

--40-- A l'inverse maintenant, afficher les stagiaires qui n'ont pas les yeux bleu ni vert
SELECT prenom, yeux FROM stagiaires WHERE yeux != "bleu" AND yeux != "vert";
+----------+--------+
| prenom   | yeux   |
+----------+--------+
| jhordan  | marron |
| MohamedA | marron |
| Anas     | marron |
| MohamedB | marron |
| Mehdi    | marron |
| Mathieu  | marron |
| Hakim    | marron |
| Sonia    | marron |
| Assa     | marron |
| Magalie  | marron |
| Yvette   | marron |
| Patrick  | marron |
+----------+--------+

--41-- récupérer tous les stagiaires qui ont mangé des bonbons, avec le détail de leurs consommations
-- Je vais modifier les consommations pour que tout le monde n'en ai pas mangé 5.

SELECT * FROM stagiaires LEFT JOIN candisplay ON stagiaires.id = candisplay.id_stagiaire;
+----+----------+--------+-------+------+-----------+--------------+-------------+----------+
| id | prenom   | yeux   | genre | id   | id_bonbon | id_stagiaire | date_manger | quantite |
+----+----------+--------+-------+------+-----------+--------------+-------------+----------+
|  7 | Hakim    | marron | m     |    1 |         4 |            7 | 2018-09-20  |        5 |
|  1 | jhordan  | marron | m     |    2 |         1 |            1 | 2018-12-05  |        6 |
|  2 | MohamedA | marron | m     |    3 |         2 |            2 | 2018-12-03  |        2 |
|  3 | Anas     | marron | m     |    4 |         3 |            3 | 2018-12-04  |        7 |
|  4 | MohamedB | marron | m     |    5 |         5 |            4 | 2018-12-15  |        6 |
|  5 | Mehdi    | marron | m     |    6 |         6 |            5 | 2018-12-18  |        3 |
|  6 | Mathieu  | marron | m     |    7 |         7 |            6 | 2018-12-22  |        9 |
|  8 | Sonia    | marron | f     |    8 |         8 |            8 | 2018-12-25  |        5 |
|  9 | Julie    | vert   | f     |    9 |         9 |            9 | 2018-12-24  |       15 |
| 10 | Assa     | marron | f     |   10 |        10 |           10 | 2018-12-01  |        8 |
| 11 | Magalie  | marron | f     |   11 |        11 |           11 | 2018-12-06  |        1 |
| 35 | Patrick  | marron | m     |   12 |        12 |           35 | 2018-09-15  |        0 |
| 12 | Yvette   | marron | f     | NULL |      NULL |         NULL | NULL        |     NULL |
| 36 | Mila     | bleu   | f     | NULL |      NULL |         NULL | NULL        |     NULL |
+----+----------+--------+-------+------+-----------+--------------+-------------+----------+

--42-- récupérer que les stagiaires qui ont mangé des bonbons, avec le détail de leurs consommations
SELECT *
FROM stagiaires s, candisplay c
WHERE s.id=c.id_stagiaire
AND quantite != 0 ; -- qui ont mangé des bonbons
+----+----------+--------+-------+----+-----------+--------------+-------------+----------+
| id | prenom   | yeux   | genre | id | id_bonbon | id_stagiaire | date_manger | quantite |
+----+----------+--------+-------+----+-----------+--------------+-------------+----------+
|  7 | Hakim    | marron | m     |  1 |         4 |            7 | 2018-09-20  |        5 |
|  1 | jhordan  | marron | m     |  2 |         1 |            1 | 2018-12-05  |        6 |
|  2 | MohamedA | marron | m     |  3 |         2 |            2 | 2018-12-03  |        2 |
|  3 | Anas     | marron | m     |  4 |         3 |            3 | 2018-12-04  |        7 |
|  4 | MohamedB | marron | m     |  5 |         5 |            4 | 2018-12-15  |        6 |
|  5 | Mehdi    | marron | m     |  6 |         6 |            5 | 2018-12-18  |        3 |
|  6 | Mathieu  | marron | m     |  7 |         7 |            6 | 2018-12-22  |        9 |
|  8 | Sonia    | marron | f     |  8 |         8 |            8 | 2018-12-25  |        5 |
|  9 | Julie    | vert   | f     |  9 |         9 |            9 | 2018-12-24  |       15 |
| 10 | Assa     | marron | f     | 10 |        10 |           10 | 2018-12-01  |        8 |
| 11 | Magalie  | marron | f     | 11 |        11 |           11 | 2018-12-06  |        1 |
+----+----------+--------+-------+----+-----------+--------------+-------------+----------+

--43-- prénom du stagiaire, le nom du bonbon, la date de consommation pour tous les stagiaires qui ont mangé au moins une fois
SELECT s.prenom, b.nom, c.date_manger
FROM stagiaires s, bonbons b, candisplay c
WHERE b.id=c.id_bonbon
AND s.id=c.id_stagiaire
AND quantite >=1 ; --au moins une fois?
+----------+-------------+-------------+
| prenom   | nom         | date_manger |
+----------+-------------+-------------+
| Hakim    | rotella     | 2018-09-20  |
| jhordan  | dragibus    | 2018-12-05  |
| MohamedA | tagada      | 2018-12-03  |
| Anas     | bams        | 2018-12-04  |
| MohamedB | floppys     | 2018-12-15  |
| Mehdi    | rainbollows | 2018-12-18  |
| Mathieu  | bigharri    | 2018-12-22  |
| Sonia    | oursor      | 2018-12-25  |
| Julie    | croco       | 2018-12-24  |
| Assa     | oeufoplat   | 2018-12-01  |
| Magalie  | flanbotti   | 2018-12-06  |
+----------+-------------+-------------+

--44-- Afficher les quantités consommées par les stagiaires (uniquement ceux qui ont mangé !)

SELECT s.prenom, c.quantite
FROM stagiaires s, candisplay c 
WHERE s.id=c.id_stagiaire
AND c.quantite <> ''
ORDER BY prenom;
+----------+----------+
| prenom   | quantite |
+----------+----------+
| Anas     |        7 |
| Assa     |        8 |
| Hakim    |        5 |
| jhordan  |        6 |
| Julie    |       15 |
| Magalie  |        1 |
| Mathieu  |        9 |
| Mehdi    |        3 |
| MohamedA |        2 |
| MohamedB |        6 |
| Sonia    |        5 |
+----------+----------+

--45-- Calculer combien de bonbons ont été mangés au total par chaque stagiaire et afficher le nombre de fois où ils ont mangé
SELECT s.prenom, SUM(c.quantite) AS total_mange, COUNT(c.date_manger) AS nombre_de_fois
FROM stagiaires s, candisplay c 
WHERE s.id=c.id_stagiaire
GROUP BY c.date_manger;
+----------+-------------+----------------+
| prenom   | total_mange | nombre_de_fois |
+----------+-------------+----------------+
| Patrick  |           0 |              1 |
| Hakim    |           5 |              1 |
| Assa     |           8 |              1 |
| MohamedA |           2 |              1 |
| Anas     |           7 |              1 |
| jhordan  |           6 |              1 |
| Magalie  |           1 |              1 |
| MohamedB |           6 |              1 |
| Mehdi    |           3 |              1 |
| Mathieu  |           9 |              1 |
| Julie    |          15 |              1 |
| Sonia    |           5 |              1 |
+----------+-------------+----------------+


--46-- Afficher combien de bonbons ont été consommés au total
SELECT SUM(quantite) FROM candisplay;
+---------------+
| SUM(quantite) |
+---------------+
|            67 |
+---------------+

--47-- Afficher le total de *Tagada* consommées
SELECT COUNT(c.quantite)
FROM bonbons b, candisplay c 
WHERE b.id=c.id_bonbon
AND b.nom="tagada";
+-------------------+
| COUNT(c.quantite) |
+-------------------+
|                 2 |
+-------------------+

--48-- Afficher les prénoms des stagiaires qui n'ont rien mangé
SELECT s.prenom
FROM stagiaires s, candisplay c 
WHERE s.id=c.id_stagiaire
AND c.quantite= 0;
+---------+
| prenom  |
+---------+
| Patrick |
+---------+

--49-- Afficher les saveurs des bonbons (sans doublons)
SELECT DISTINCT nom FROM bonbons;
+-------------+
| nom         |
+-------------+
| dragibus    |
| tagada      |
| bams        |
| rotella     |
| floppys     |
| rainbollows |
| bigharri    |
| oursor      |
| croco       |
| oeufoplat   |
| flanbotti   |
+-------------+

--50-- Afficher le prénom du stagiaire qui a mangé le plus de bonbons
SELECT s.prenom, MAX(c.quantite)
FROM stagiaires s, candisplay c
WHERE s.id=c.id_stagiaire;
+--------+-----------------+
| prenom | MAX(c.quantite) |
+--------+-----------------+
| Hakim  |              15 |
+--------+-----------------+
