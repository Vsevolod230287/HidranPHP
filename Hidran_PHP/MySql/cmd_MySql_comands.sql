-- mostra i database
show databases;


-- crea un database
create database nomeDB;


-- cambia database
use test1;  
show tables; 


-- creare una tabella
-- "->" - significa che siamo andati acapo con Enter
create table users (username varchar(128) NOT NULL,
-> age tinyint(3) unsigned);


-- descriviamo detaliatamente il contenuto della tabella
describe users;

-- ci mostrera un output del tipo: 
-- +----------+---------------------+------+-----+---------+-------+
-- | Field    | Type                | Null | Key | Default | Extra |
-- +----------+---------------------+------+-----+---------+-------+
-- | username | varchar(128)        | NO   |     | NULL    |       |
-- | age      | tinyint(3) unsigned | YES  |     | NULL    |       |
-- +----------+---------------------+------+-----+---------+-------+


-- eseguendo dalla riga di comando o da phpmyadmin nella tab Sql
-- alteriamo la tabella users e aggiungiamo una colonna fiscalCode si tipom char(16) e Non puo essere nullo.
ALTER TABLE users ADD fiscalCode char(16) NOT null;


-- creato l'indice IDX_FISCALCODE per il campo fiscalCode della tabella users per una ricerca piu veloce
CREATE INDEX IDX_FISCALCODE on users (fiscalCode(16));



-- ALTERIAMO LA TABELLA USERS ELIMINANDO L'INDICE IDX_FISCALCODE
ALTER TABLE users DROP INDEX IDX_FISCALCODE;



-- CREIAMO UN INDICE UNIVOCO "IDX_FISCALCODE" SULLA TABELLA "USERS" SUL CAMPO "FISCALCODE(16)"
CREATE UNIQUE INDEX IDX_FISCALCODE on users (fiscalCode(16));


-- inseriamo nella tabella users ai seuenti campi (`id`, `username`, `age`, `fiscalCode`)  i seguenti valori (NULL, 'VsevolodCerneavschi', '35', 'crnvvl87b23z140t')
INSERT INTO `users` (`id`, `username`, `age`, `fiscalCode`) VALUES (NULL, 'VsevolodCerneavschi', '35', 'crnvvl87b23z140t');


--inseriamo un altra riga
INSERT INTO users ( `username`, age, `fiscalCode` ) VALUES ( 'Antonio', 33, 'crpmmo23b67z149n' );


--inseriamo un altra riga senza specificare le colone pero mantenendo l'ordine dei valori rispetto alle colonne
INSERT INTO users VALUES (NULL, 'Marco', 34, 'dfgnna12k34z12y');

-- AGGIORNIAMO LA TABELLA USERS IMPOSTIAMO IL CAMPO USERNAME = 'BestDeveloperVsevolod' DOVE IL CAMPO id e uguale 1
UPDATE users SET username = 'BestDeveloperVsevolod' WHERE id = 1;



-- selezionami tutte le collonne della tabella users dove username cominci con 'Be'
SELECT * FROM `users` WHERE username LIKE 'Be%';


-- selezionami tutte le collonne della tabella users dove username finisca con 'd'
SELECT * FROM `users` WHERE username LIKE '%d';

-- selezionami tutte le collonne della tabella users dove username contenga  'd'
SELECT * FROM `users` WHERE username LIKE '%d%';


DELETE FROM `users` WHERE id=3;





