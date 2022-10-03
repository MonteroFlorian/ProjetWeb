DROP schema if exists vinyL cascade;

CREATE SCHEMA vinyl;

CREATE TABLE vinyl.comptes (
	id_user serial4 NOT NULL,
	identifiant varchar(50) NOT NULL,
	pw_hash varchar(600) NOT NULL,
	email varchar(60) NOT NULL,
	CONSTRAINT comptes_email_check CHECK (((email)::text ~~ '%@%.%'::text)),
	CONSTRAINT comptes_email_key UNIQUE (email),
	CONSTRAINT comptes_identifiant_key UNIQUE (identifiant),
	CONSTRAINT comptes_pkey PRIMARY KEY (id_user)
);


CREATE TABLE vinyl.disque (
	id_disque serial4 NOT NULL,
	titre varchar(60) NOT NULL,
	auteur varchar(60) not null,
	prix int not null,
	image varchar(100) not null,
	CONSTRAINT disque_image_key UNIQUE (image),
	CONSTRAINT disque_pkey PRIMARY KEY (id_disque),
	constraint disque_titre unique (titre)
);


CREATE TABLE vinyl.musiques (
	id_music serial4 NOT NULL,
	titre varchar(60) not null,
	link varchar(100) NOT NULL,
	CONSTRAINT musiques_link_key UNIQUE (link),
	CONSTRAINT musiques_pkey PRIMARY KEY (id_music)
);

CREATE TABLE vinyl.album(
	id_disque int NOT NULL,
	id_music int NOT NULL,
	FOREIGN KEY (id_music) REFERENCES vinyl.musiques (id_music),
	FOREIGN KEY (id_disque) REFERENCES vinyl.disque (id_disque)
	);

CREATE TABLE vinyl.achats (
	id_user int NOT NULL,
	id_disque int NOT NULL,
	FOREIGN KEY (id_user) REFERENCES vinyl.comptes (id_user),
	FOREIGN KEY (id_disque) REFERENCES vinyl.disque (id_disque)

);




