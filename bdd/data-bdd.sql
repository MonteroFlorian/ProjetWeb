SET search_path TO vinyl;


-- Supprimer toutes les données
DELETE FROM comptes;
DELETE FROM disque;
delete from musiques;
delete from achats;
delete from album;



-- Compte

INSERT INTO comptes (identifiant, pw_hash, email ) VALUES 
  ( 'geek', 'geek', 'geek@jfox.fr' ),
  ( 'chef', 'chef', 'chef@jfox.fr' ),
  ( 'job', 'job', 'job@jfox.fr' );

-- Disque

INSERT INTO disque (titre, auteur, prix, image,genre) VALUES 
  ('Symphonies de Beethoven', 'Ludwig von Beethoven', 10, 'image1','classique'),
  ('Symphonies de Vivaldi' , 'Antonio Lucio Vivaldi', 15, 'image2','classique'),
  ('Symphonies de Mozart', 'Wolfgang Amadeus Mozart', 20, 'image3','classique'),
  ('Dawn of Victory','Rhapsody of fire', 20, 'image4','metal'),
  ('24K Magic', 'Bruno Mars', 25, 'image5', 'pop'),
  ('DAMN.','Kendrick Lamar', 20, 'image6','rap'),
  ('Uprising', 'Bob Marley',10,'image7','reggae'),
  ('Highway to hell', 'AC/DC',15,'image8','rock');


-- Musiques
  
--INSERT INTO musiques (titre, link ) VALUES ;




-- Album

--INSERT INTO album (id_disque, id_music) VALUES ;



-- Achats

--INSERT INTO achats (id_user, id_disque ) VALUES ;