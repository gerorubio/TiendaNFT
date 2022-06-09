coleCREATE DATABASE nfts;

USE nfts

DROP TABLE ventas;
DROP TABLE nft;
DROP TABLE coleccion;

CREATE TABLE coleccion (
  id_coleccion INTEGER PRIMARY KEY AUTO_INCREMENT,
  nombre_coleccion varchar(100),
  autor text,
  url varchar(255)
);

CREATE TABLE nft (
  id_nft INTEGER,
  id_coleccion INTEGER,
  ruta varchar(255),
  precio float,
  cantidad int,
  CONSTRAINT pk_nft PRIMARY KEY(id_nft, id_coleccion),
  CONSTRAINT fk_coleccion FOREIGN KEY (id_coleccion) REFERENCES coleccion(id_coleccion)
);

CREATE TABLE ventas
(
    id int primary key AUTO_INCREMENT,
    id_nft int,
    id_coleccion int,
    precio float,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    nombre varchar(200)
);

CREATE TRIGGER actualizarVenta 
AFTER INSERT ON ventas 
FOR EACH ROW 
UPDATE nft SET cantidad = cantidad - 1 WHERE id_nft = NEW.id_nft;

INSERT INTO coleccion(nombre_coleccion, autor, url) VALUES('Bored Ape', 'Yuga Labs', 'https://boredapeyachtclub.com/#/home');
INSERT INTO coleccion(nombre_coleccion, autor, url) VALUES('CryptoPunk', 'Larva Labs', 'https://www.larvalabs.com/cryptopunks');
INSERT INTO coleccion(nombre_coleccion, autor, url) VALUES('Ringers', 'Dmitri Cherniak', 'https://twitter.com/dmitricherniak?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor');
INSERT INTO coleccion(nombre_coleccion, autor, url) VALUES('The Wicked Craniums', 'Reckless Labs', 'https://www.wickedcranium.com');
INSERT INTO coleccion(nombre_coleccion, autor, url) VALUES('Galaxy Egg', 'Barkan', 'https://www.galaxy-eggs.com');
INSERT INTO coleccion(nombre_coleccion, autor, url) VALUES('Magical Girl Club', 'SimonK', 'https://mggclub.carrd.co');

INSERT INTO nft VALUES (800, 1, 'boredape0800.png', 20000.0, 6);
INSERT INTO nft VALUES (4580, 1, 'boredape4580.png', 30000.0, 3);
INSERT INTO nft VALUES (7698, 1, 'boredape7698.png', 40000.0, 7);
INSERT INTO nft VALUES (400, 2, 'cryptopunk0400.png', 5000.0, 12);
INSERT INTO nft VALUES (7804, 2, 'cryptopunk7804.png', 3000.0, 13);
INSERT INTO nft VALUES (8857, 2, 'cryptopunk8857.png', 2000.0, 4);
INSERT INTO nft VALUES (109, 3, 'ringers109.png', 40000.0, 22);
INSERT INTO nft VALUES (202, 3, 'ringers202.png', 80000.0, 1);
INSERT INTO nft VALUES (6005, 4, 'wickedcranium6005.png', 90000.0, 3);
INSERT INTO nft VALUES (6171, 4, 'wickedcraniums6171.png', 45000.0, 5);
INSERT INTO nft VALUES (1, 5, 'galaxyeggs01.jpg', 15000.0, 6);
INSERT INTO nft VALUES (2, 5, 'galaxyeggs02.jpg', 45000.0, 3);
INSERT INTO nft VALUES (3, 5, 'galaxyeggs03.jpg', 4000.0, 4);
INSERT INTO nft VALUES (4, 5, 'galaxyeggs04.jpg', 35000.0, 8);
INSERT INTO nft VALUES (1, 6, 'magicgirl01.gif', 6000.0, 24);
INSERT INTO nft VALUES (2, 6, 'magicgirl02.gif', 5000.0, 17);
INSERT INTO nft VALUES (3, 6, 'magicgirl03.gif', 8000.0, 9);
INSERT INTO nft VALUES (4, 6, 'magicgirl04.gif', 6300.0, 2);

INSERT INTO ventas(id_nft, id_coleccion, precio, nombre) VALUES (800, 1, 20000, 'Isaias Ramirez');
INSERT INTO ventas(id_nft, id_coleccion, precio, nombre) VALUES (4580, 1, 30000, 'Bouchra Nadal');
INSERT INTO ventas(id_nft, id_coleccion, precio, nombre) VALUES (7698, 1, 40000, 'Urbano Mendez');
INSERT INTO ventas(id_nft, id_coleccion, precio, nombre) VALUES (400, 2, 5000, 'Said Alcala');

COMMIT;